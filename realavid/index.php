<!DOCTYPE html>
<html>
  <head>
    <title>AI for RealAvid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.rawgit.com/jlong/css-spinners/master/css/spinners.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Include jQuery and select2 CSS and JS files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link rel="stylesheet" href="custom.css">
    <meta property="og:title" content="AI for RealAvid">
    <meta property="og:description" content="API Driven Chat Bot">
    <meta property="og:image" content="/android-chrome-512x512.png">
    <meta property="og:url" content="/android-chrome-512x512.png">
    <meta name="twitter:title" content="AI for RealAvid">
    <meta name="twitter:description" content="API Driven Chat Bot">
    <meta name="twitter:image" content="/android-chrome-512x512.png">
    <meta name="twitter:card" content="/android-chrome-512x512.png">
  </head>
  <body>
    <div id="messages" class="mx-auto" style="margin-top:2%;">
      <!-- chat messages will be displayed here -->
    </div>
    <div id="prompts">
      <form class="d-flex justify-content-center">
        <input type="text" name="message" placeholder="Questions..." class="form-control">
        <button id="sendBtn" type="submit" class="btn btn-primary ml-2">Send</button>
        <br>
      </form>
      <div class="d-flex justify-content-center mt-1">
        <button id="clearBtn" type="button" class="btn btn-danger mr-1">Reset</button>
        <!--
	  <button id="exportBtn" type="button" class="btn btn-success mr-1">Export</button><button id="copyBtn" type="button" class="btn btn-warning mr-1">Copy</button>
      -->
        <button id="infoBtn" type="button" class="btn btn-info mr-1">Info</button>
        <select id="myDropdown" class="select2" onchange="updateHeader()">
          <option value="Normal">Normal</option>
          <option value="YouTube">YouTube</option>
          <option value="Script">Script</option>
          <option value="Email">Email</option>
          <option value="Blog">Blog</option>
          <option value="Product">Product</option>
          <option value="Facebook">Facebook</option>
          <option value="Instagram">Instagram</option>
          <option value="Pinterest">Pinterest</option>
          <option value="Twitter">Twitter</option>
          <option value="AmazonProduct">Amazon Product</option>
          <option value="AmazonPost">Amazon Post</option>
          <option value="ZoeyProduct">Zoey Product</option>
          <option value="TechInstructions">Tech Instructions</option>
        </select>
      </div>
    </div>
    <script src="voices.js"></script>
    <!-- LOADING MODAL -->
    <div id="loading-modal" class="modal">
      <div class="modal-content">
        <div class="cell">
          <div class="card">
            <span class="circles-loader">Loading&#8230;</span>
          </div>
        </div>
      </div>
    </div>
    <!-- INFO MODAL -->
    <div id="modal">
      <div class="modal-content2">
        <span class="close" id="closeBtn">&times;</span>
        <h3>AI for Real Avid Information</h3>
        <p>Firstly, initiate a conversation by typing a message to the chatbot. The chatbot will respond with pre-programmed responses based on the keywords and phrases it detects in your message. You can continue the conversation by asking questions or providing more information.</p>
        <br>
        <p>The chatbot will recall your previous remarks and take them into account for subsequent replies. Hit the <strong>'Reset'</strong> button to start a fresh line of questions and clear the chat window. Remember that chatbots are not human and may not understand complex or nuanced language, so keep your messages clear and concise. </p>
        <br>
        <p>Use the <strong>'Long'</strong> and <strong>'Short'</strong> options to choose between a lenghty, descriptive answer, or a short, concise answer. </p>
        <br>
        <p>Use the <strong>'Temp'</strong> slider to change the creativity or accuracy level of the replies. Generally, below 1 is where you want to be. Anything over 1.6 starts to make the bot 'hallucinate'. Feel free to try out all these different settings. </p>
        <br>
        <br>
        <a href="mailto:amcmorrow84@gmail.com">Email me with any questions or comments.</a>
      </div>
    </div>
    <script src="conn.js"></script>
    <script src="buttons.js"></script>
  </body>
</html>