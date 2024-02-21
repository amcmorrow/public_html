const messagesTxt = document.getElementById('messages');
    const clearBtn = document.getElementById('clearBtn');
    const exportBtn = document.getElementById('exportBtn');
    const copyBtn = document.getElementById('copyBtn');

    clearBtn.addEventListener('click', () => {
      messagesTxt.innerHTML = '';
      assistMess = [];
      userMess = [];
    });

/*
exportBtn.addEventListener('click', async () => {
  try {
    const messagesText = messagesTxt.innerText;
    const blob = new Blob([messagesText], { type: 'text/plain' });

    const formData = new FormData();
    formData.append('file', blob, 'messages.txt');

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'save.php', true);
    xhr.onload = function() {
      const response = JSON.parse(this.responseText);
      if (response.success) {
        const downloadUrl = response.fileUrl;
        const a = document.createElement('a');
        a.href = downloadUrl;
        a.download = 'messages.txt';
        a.click();
      } else {
        alert('Error saving messages');
      }
    };
    xhr.send(formData);

  } catch (err) {
    console.error('Error saving messages', err);
    alert('Error saving messages');
  }
});

copyBtn.addEventListener('click', () => {
  const messagesText = messagesTxt.innerText;

  if (navigator.clipboard) {
    navigator.clipboard.writeText(messagesText).then(() => {
      alert('Messages copied to clipboard!');
    }).catch((error) => {
      console.error('Error copying to clipboard:', error);
    });
  } else {
    const tempTextarea = document.createElement('textarea');
    tempTextarea.value = messagesText;
    tempTextarea.setAttribute('readonly', '');
    tempTextarea.style.position = 'absolute';
    tempTextarea.style.left = '-9999px';
    document.body.appendChild(tempTextarea);
    tempTextarea.select();
    const result = document.execCommand('copy');
    document.body.removeChild(tempTextarea);
    if (result) {
      alert('Messages copied to clipboard!');
    } else {
      alert('Error copying to clipboard!');
    }
  }
});
*/

const infoBtn = document.getElementById('infoBtn');
const modal = document.getElementById('modal');
const closeBtn = document.getElementById('closeBtn');

infoBtn.addEventListener('click', () => {
  modal.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

