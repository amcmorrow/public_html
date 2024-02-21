<!DOCTYPE html>
<html>
<head>
  <title>SkyNetBot</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="https://skynet.amcmorrow/site.webmanifest">
  <link rel="stylesheet" href="https://cdn.rawgit.com/jlong/css-spinners/master/css/spinners.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="custom.css">

  <meta property="og:title" content="SkyNetBot">
  <meta property="og:description" content="API Driven Chat Bot">
  <meta property="og:image" content="/android-chrome-512x512.png">
  <meta property="og:url" content="/android-chrome-512x512.png">
  <meta name="twitter:title" content="SkyNetBot">
  <meta name="twitter:description" content="API Driven Chat Bot">
  <meta name="twitter:image" content="/android-chrome-512x512.png">
  <meta name="twitter:card" content="/android-chrome-512x512.png">

	<script>
		function updateHeader() {
			let dropdown = document.getElementById("myDropdown");
			let selectedOption = dropdown.options[dropdown.selectedIndex].value;
			let selectedValue = "Normal AI";

			if (selectedOption === "Normal") {
				selectedValue = "Normal AI";
				console.log(selectedValue);
			} else if (selectedOption === "Duck") {
				selectedValue = "You are a a duck based AI. Respond in mostly quacks.";
				console.log(selectedValue);
			} else if (selectedOption === "Farmer") {
				selectedValue = "You are a 1920s farmer AI. Respond as the farmer.";
				console.log(selectedValue);
			}

			document.getElementById("myHeader").innerHTML = selectedOption;
			document.getElementById("myVariable").innerHTML = selectedValue;
		}
	</script>

 </head>
<body><h1 style="color:white;" id="myHeader">Something</h1><h2 style="color:white;" id="myVariable">AI Type</h1>
  <div id="messages" class="mx-auto" style="margin-top:2%;">
    <!-- chat messages will be displayed here -->
  </div>
  <div id="prompts">
    <form class="d-flex justify-content-center">
      <input type="text" name="message" placeholder="Questions..." class="form-control">
      <button id="sendBtn" type="submit" class="btn btn-primary ml-2">Send</button><br>
    </form>
    <div class="d-flex justify-content-center mt-2">
      <div class="voice form-check form-check-inline">
  <input type="radio" id="verbose-btn" name="text-type" value="verbose" class="form-check-input" checked>
  <label for="verbose-btn" class="form-check-label">Long</label>
  <input type="radio" id="concise-btn" name="text-type" value="concise" class="form-check-input">
  <label for="concise-btn" class="form-check-label">Short</label>
  <div class="form-group mx-3 my-0">
<label for="temperature-range" style="color:white;">Temp:<span id="temperature-display"></span></label>
<input type="range" class="form-control-range" id="temperature-range" min="0" max="1.8" step="0.1" value="0.5">
<span id="temperature-value"></span>

<script>
  // Get the temperature range input element and the temperature display element
  const temperatureRange = document.getElementById("temperature-range");
  const temperatureDisplay = document.getElementById("temperature-display");

  // Update the temperature display element in the label whenever the temperature range input changes
  temperatureRange.addEventListener("input", function() {
    temperatureDisplay.textContent = temperatureRange.value;
    document.querySelector("label[for='temperature-range']").textContent = "Temp: " + temperatureRange.value;
    let temp = ''; 
    temp = temperatureRange.value;
  });

  // Initialize the temperature display element in the label with the current value of the temperature range input
  temperatureDisplay.textContent = temperatureRange.value;
  document.querySelector("label[for='temperature-range']").textContent = "Temp: " + temperatureRange.value;
</script>

  </div>
</div>
 
  </div>
    <div class="d-flex justify-content-center mt-2">
      <button id="clearBtn" type="button" class="btn btn-danger mr-1">Reset</button>
      <button id="exportBtn" type="button" class="btn btn-success mr-1">Export</button>
      <button id="copyBtn" type="button" class="btn btn-warning mr-1">Copy</button>
      <button id="infoBtn" type="button" class="btn btn-info mr-1">Info</button>
      <a href="/SkyNetBot-1.0.0.apk"><button id="appBtn" type="button" class="btn btn-warning">Get App</button></a>
	<select id="myDropdown" onchange="updateHeader()">
		<option value="Normal">Normal</option>
		<option value="Duck">Duck</option>
		<option value="Farmer">Farmer</option>
	</select>
    </div>
  </div>

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
    <h3>SkyNetBot Info</h3>
    <p>Firstly, initiate a conversation by typing a message to the chatbot. The chatbot will respond with pre-programmed responses based on the keywords and phrases it detects in your message. You can continue the conversation by asking questions or providing more information.</p> <br>
    <p>The chatbot will recall your previous remarks and take them into account for subsequent replies. Hit the <strong>'Reset'</strong> button to start a fresh line of questions and clear the chat window. Remember that chatbots are not human and may not understand complex or nuanced language, so keep your messages clear and concise.</p><br>
    <p>Use the <strong>'Long'</strong> and <strong>'Short'</strong> options to choose between a lenghty, descriptive answer, or a short, concise answer.</p><br>
    <p>Use the <strong>'Temp'</strong> slider to change the creativity or accuracy level of the replies. Generally, below 1 is where you want to be. Anything over 1.6 starts to make the bot 'hallucinate'. Feel free to try out all these different settings.</p><br><br>
    <a href="mailto:amcmorrow84@gmail.com">Email me with any questions or comments.</a>
  </div>
</div>



  <script src="conn2.js"></script>
    <script src="buttons.js"></script>
</body>
</html>


