<!DOCTYPE html>
<html>
  <body>
    <!-- ... Your HTML and CSS -->

    <script type="importmap">
      {
        "imports": {
          "@google/generative-ai": "https://cdn.jsdelivr.net/npm/@google/generative-ai/+esm"
        }
      }
    </script>
    <script type="module">
    
      import { GoogleGenerativeAI } from "@google/generative-ai";

      // Fetch your API_KEY
      const API_KEY = "AIzaSyB3jnppMUM7wfCWPTJubay5ko4g9f7kaQ4";

      // Access your API key (see "Set up your API key" above)
      const genAI = new GoogleGenerativeAI(API_KEY);

    
// Converts a File object to a GoogleGenerativeAI.Part object.
async function fileToGenerativePart(file) {
  const base64EncodedDataPromise = new Promise((resolve) => {
    const reader = new FileReader();
    reader.onloadend = () => resolve(reader.result.split(',')[1]);
    reader.readAsDataURL(file);
  });
  return {
    inlineData: { data: await base64EncodedDataPromise, mimeType: file.type },
  };
}

async function run() {
  // For text-and-images input (multimodal), use the gemini-pro-vision model
  const model = genAI.getGenerativeModel({ model: "gemini-pro-vision" });

  const prompt = "What is this image?";

  const fileInputEl = document.querySelector("input[type=file]");
  const imageParts = await Promise.all(
    [...fileInputEl.files].map(fileToGenerativePart)
  );

  const result = await model.generateContent([prompt, ...imageParts]);
  const response = await result.response;
  const text = response.text();
  console.log(text);
}
    
    // Assuming genAI and other necessary variables/functions are defined in your javascript.js file

        document.getElementById('upload-form').addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent the form from submitting in the traditional way
            await run(); // Call the 'run' function when the form is submitted
        });
        
        
    </script>
    
        <form id="upload-form">
        <input type="file" id="file-input" accept="image/*" multiple>
        <button type="submit">Submit</button>
    </form>

  </body>
</html>
