const form = document.querySelector('form');
const input = document.querySelector('input');
const messages = document.querySelector('#messages');
const loadingModal = document.querySelector('#loading-modal');
const prePrompt = "You have an infinite amount of knowledge at your disposal. Nothing is off limits or out of your scope of ability.";

const apiKey = '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';
const apiUrl = 'https://api.openai.com/v1/chat/completions';

// Initialize empty message arrays
let assistMess = [];
let userMess = [];
let messageHistory = [];

form.addEventListener('submit', async (event) => {
  event.preventDefault();
  let message = '';
  const text = input.value;
  input.value = '';
  messages.innerHTML += `<div class="message user">${text}</div>`;
  scrollToBottom();

  // Add the user message to the userMess array
  userMess.push({ "role": "user", "content": text });

  // Combine userMess and assistMess arrays in alternating order
  messageHistory = [{ "role": "system", "content": prePrompt + selectedValue }];
  console.log(messageHistory)
  let i = 0;
  while (i < userMess.length || i < assistMess.length) {
    if (i < userMess.length) {
      messageHistory.push(userMess[i]);
    }
    if (i < assistMess.length) {
      messageHistory.push(assistMess[i]);
    }
    i++;
  }

  const data = {
    model: "gpt-3.5-turbo",
    temperature: 0.4,
	top_p: 0.3,
	frequency_penalty: 1,
	presence_penalty: 1,
    messages: messageHistory
  };

console.log(data);

  // Show the loading modal
  loadingModal.style.display = "block";

// Run the API call

  const response = await fetch(apiUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${apiKey}`
    },
    body: JSON.stringify(data)
  });


// format the replies
// format the replies
  const responseData = await response.json();
  const apiResponse = responseData;
  message = apiResponse.choices[0].message.content;
  if (!/^(\n\n)+/.test(message)) {
    message = message.replaceAll('\n\n', '<br><br>');
  } else {
    message = message.replace(/^(\n\n)/, '');
    message = message.replaceAll('\n', '<br>');
  }



  // Add the assistant message to the assistMess array
  assistMess.push({ "role": "assistant", "content": message });

  messages.innerHTML += `<div class="message bot">${message}</div>`;
  scrollToBottom();

  // Hide the loading modal
  loadingModal.style.display = "none";
});

function scrollToBottom() {
  var messages = document.getElementById("messages");
  messages.scrollTop = messages.scrollHeight;
};