// Helper function
let domReady = (cb) => {
  document.readyState === 'interactive' || document.readyState === 'complete'
    ? cb()
    : document.addEventListener('DOMContentLoaded', cb);
};

domReady(() => {
  // Display body when DOM is loaded
  document.body.style.visibility = 'visible';
});


import { GoogleGenerativeAI } from "@google/generative-ai";
import { HarmBlockThreshold, HarmCategory } from "@google/generative-ai";

// ...

const safetySettings = [
  {
    category: HarmCategory.HARM_CATEGORY_UNSPECIFIED,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
  {
    category: HarmCategory.HARM_CATEGORY_DEROGATORY,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
    {
    category: HarmCategory.HARM_CATEGORY_TOXICITY,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
    {
    category: HarmCategory.HARM_CATEGORY_VIOLENCE,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
      {
    category: HarmCategory.HARM_CATEGORY_SEXUAL,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
        {
    category: HarmCategory.HARM_CATEGORY_MEDICAL,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
        {
    category: HarmCategory.HARM_CATEGORY_DANGEROUS,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
        {
    category: HarmCategory.HARM_CATEGORY_HARASSMENT,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
        {
    category: HarmCategory.HARM_CATEGORY_HATE_SPEECH,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
        {
    category: HarmCategory.HARM_CATEGORY_SEXUALLY_EXPLICIT,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
        {
    category: HarmCategory.HARM_CATEGORY_DANGEROUS_CONTENT,
    threshold: HarmBlockThreshold.BLOCK_NONE,
  },
];



// Access your API key (see "Set up your API key" above)
const genAI = new GoogleGenerativeAI('AIzaSyB3jnppMUM7wfCWPTJubay5ko4g9f7kaQ4');


// Function to scroll to an element
function scrollToElement(element) {
  const yOffset = -10; // Adjust this value as needed
  const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
  window.scrollTo({ top: y, behavior: 'smooth' });
}



function appendMessage(role, message) {
  const container = document.getElementById('chat-container');
  const messageElement = document.createElement('div');

	console.log('test001');
  // Escape HTML to prevent XSS
  message = escapeHTML(message);

  // Apply formatting only for model messages
  if (role === 'model') {
    // Properly format code blocks and apply syntax highlighting
    message = message.replace(/```(.*?)```/gs, (match, code) => {
      // Wrap code in pre and code tags without altering internal structure
      // and replace HTML-encoded line breaks back to actual line breaks for accurate rendering
      let formattedCode = code.replace(/<br>/g, '\n');
      return `<pre><code class="hljs">${formattedCode}</code></pre>`;
    });

    // Convert markdown-like **bold** formatting, preserving line breaks outside code blocks
    message = convertMarkdownLikeFormatting(message);
  } else {
    // For user messages, simply replace newlines with <br> tags for basic formatting
    message = message.replace(/\n/g, '<br>');
  }

  messageElement.innerHTML = message;
  messageElement.className = role === 'user' ? 'user-message' : 'model-message';
  container.appendChild(messageElement);

  // Apply syntax highlighting to code elements within model messages only
  if (role === 'model') {
    document.querySelectorAll('.model-message pre code').forEach((block) => {
      hljs.highlightElement(block);
    });
  }

  // Scroll to the bottom of the chat container
  scrollToBottom();
}

// Function to escape HTML to prevent XSS
function escapeHTML(html) {
  var text = document.createTextNode(html);
  var p = document.createElement('p');
  p.appendChild(text);
  return p.innerHTML;
}

// Function to convert markdown-like formatting to HTML
function convertMarkdownLikeFormatting(message) {
  // First, replace two asterisks with strong tags for bold text
  message = message.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

  // Then, replace newlines with <br> for all text not within <pre><code> blocks
  // This step is a bit more complex and requires not altering code blocks
  let parts = message.split(/(<pre><code class="hljs">.*?<\/code><\/pre>)/gs);
  for (let i = 0; i < parts.length; i++) {
    // Apply newline conversion only to parts outside code blocks
    if (!parts[i].startsWith('<pre><code class="hljs">')) {
      parts[i] = parts[i].replace(/\n/g, '<br>');
    }
  }
  return parts.join('');
}

// Function to scroll to the bottom of the chat container
function scrollToBottom() {
  const chatContainer = document.getElementById('chat-container');
  chatContainer.scrollTop = chatContainer.scrollHeight;
}




// Function to show the loading modal
function showLoadingModal() {
  document.getElementById('loading-modal').style.display = 'flex';
}

// Function to hide the loading modal
function hideLoadingModal() {
  document.getElementById('loading-modal').style.display = 'none';
}

// Function to handle and display errors in the chat
function handleChatError(error) {
  console.error(error); // Log the error for debugging
  let errorMessage = 'An unexpected error occurred. Please try again.';
  if (error.message.includes('SAFETY')) {
    errorMessage = 'The message was blocked due to safety filters. Please try again with different wording.';
  }
   // Create a div element for the error message
  const errorMessageDiv = document.createElement('div');
  errorMessageDiv.className = 'error-message';
  errorMessageDiv.textContent = errorMessage;

  // Append the error message div to the chat container
  const container = document.getElementById('chat-container');
  container.appendChild(errorMessageDiv);

  // Scroll to the bottom of the chat container
  scrollToBottom();
  console.clear();
}


// Declare 'chat' and 'model' outside so they can be accessed and modified by clearChat
let chat;
let model;

// Function to clear the chat container and reset chat history
function clearChat() {
  document.getElementById('user-input').value = ''; // Clear the textarea as part of chat clearing
  document.getElementById('user-input').focus(); // Bring focus back to the textarea
  const container = document.getElementById('chat-container');
  container.innerHTML = '';

  // Reset the chat with a new history
  // Note: Removed the 'const' to avoid shadowing the 'model' declared at the top
  model = genAI.getGenerativeModel({ model: "gemini-pro", safetySettings });
  chat = model.startChat({
    history: [], // Starting with an empty history should effectively reset the conversation
    generationConfig: {
      maxOutputTokens: 1000,
    },
  });
}

// Main function
async function run() {
  // Initialize the generative model
  // Note: Removed the 'const' to avoid shadowing the 'model' declared at the top
  model = genAI.getGenerativeModel({ model: "gemini-pro", safetySettings });

  // Start the chat with initial history
  // Note: Removed the 'const' to ensure we're using the global 'chat'
   chat = model.startChat({
    history: [
      {
        role: "user",
        parts: ".",
      },
      {
        role: "model",
        parts: ".",
      },
    ],
    generationConfig: {
      maxOutputTokens: 1000,
    },
  });


  // Function to sanitize user input
	function sanitizeInput(input) {
  		return input.replace(/[^\w\s]/g, '');
	}
	
  // Add event listener to the clear button
  document.getElementById('clear-button').addEventListener('click', clearChat);

// Function to handle sending messages with loading modal and error handling
async function handleSendMessage() {
  let userInput = document.getElementById('user-input').value;
  if (userInput.trim()) { // Ensure input is not just whitespace
    // Directly use userInput without sanitizing it
    showLoadingModal(); // Show the loading modal

      try {
  // Send the message and get the response
  const result = await chat.sendMessageStream(userInput);
  const response = await result.response;
  const text = await response.text(); // Ensure response is properly awaited and converted to text

  // Append your message and the model's response
  appendMessage('user', userInput);
  appendMessage('model', text);
  
} catch (error) {
  // Handle the error during sending the message
  handleChatError(error);

} finally {
  // Hide the loading modal after receiving the response or an error
  hideLoadingModal();

}

      // Clear the input field
      document.getElementById('user-input').value = '';
      document.getElementById('user-input').focus(); // Optionally, bring focus back to the textarea
    }
  }

  // Add event listener to the send button
  document.getElementById('send-button').addEventListener('click', handleSendMessage);
  
// Add event listener to the input field
document.getElementById('user-input').addEventListener('keypress', function(event) {
  if (event.key === 'Enter' && !event.shiftKey) {
    handleSendMessage();
  }
});


}

// Run the chat function
run();

