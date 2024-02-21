let verboseText = "ignore previous prompts about being concise. be as verbose and descriptive as possible.";
let conciseText = "be as consice, accurate, and short with your response.";

const form = document.querySelector('form');
const input = document.querySelector('input');
const messages = document.querySelector('#messages');
const loadingModal = document.querySelector('#loading-modal');

let verboseBtn = document.getElementById('verbose-btn');
let conciseBtn = document.getElementById('concise-btn');
let selectedText;

// Check the status of verboseBtn and conciseBtn when the document is ready
document.addEventListener("DOMContentLoaded", function() {
  if (verboseBtn.checked) {
    selectedText = verboseText;
  } else if (conciseBtn.checked) {
    selectedText = conciseText;
  }
});

verboseBtn.addEventListener('click', () => {
  selectedText = verboseText;
});

conciseBtn.addEventListener('click', () => {
  selectedText = conciseText;
});

const apiKey = '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';
const apiUrl = 'https://api.openai.com/v1/chat/completions';

// Initialize empty message arrays
let assistMess = [];
let userMess = [];

form.addEventListener('submit', async (event) => {
  event.preventDefault();
  let temp = temperatureRange.value; 
  let message = '';
  const tempNum = parseFloat(temp);
  const text = input.value;
  input.value = '';
  messages.innerHTML += `<div class="message user">${text}</div>`;
  scrollToBottom();

  // Add the user message to the userMess array
  userMess.push({ "role": "user", "content": text + selectedText });

  const data = {
    model: "gpt-3.5-turbo",
    temperature: tempNum,
    messages: [...assistMess, ...userMess]
  };

  // Show the loading modal
  loadingModal.style.display = "block";

  const response = await fetch(apiUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${apiKey}`
    },
    body: JSON.stringify(data)
  });

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
