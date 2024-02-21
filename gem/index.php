<?php
ob_start(); // Start buffering output
// Set the cache control headers to prevent caching
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");

// Add a unique query string parameter to the CSS and JS files
$css_file = '/gem/style.css?v=' . time();
$js_file = '/gem/conn.js?v=' . time();
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="<?php echo $css_file; ?>">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gemini Pro</title>
	<script type="importmap">{"imports": {"@google/generative-ai": "https://cdn.jsdelivr.net/npm/@google/generative-ai/+esm"}}</script>
    <script type="module" src="<?php echo $js_file; ?>"></script>


<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>

<!--Syntax Highlighting -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>


</head>

<body style="visibility: hidden;">
  <script>0</script>
<div class="codepen">
		

	
</div>

<!-- CHAT WINDOW -->
  <div id="chat-container"></div>
<!-- END CHAT WINDOW -->
<!--INPUTS-->
<div id="input-container">
<textarea id="user-input" placeholder="Type your message here" rows="4"></textarea>
</div>
<div id="button-container">
<div class="uk-button-group">
    <button class="uk-button uk-button-primary" id="send-button">Send</button>
    <button class="uk-button uk-button-primary" id="clear-button">Clear</button>
    <button class="uk-button uk-button-primary" id="save-button">Save</button>
    <button class="uk-button uk-button-primary" id="load-button">Load</button>
</div>
</div>
<!--END INPUTS-->


<!--MODAL -->
<div id="loading-modal">
  <div class="loading-message">
<!-- CUSTOM -->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -10" result="goo" />
      <feBlend in="SourceGraphic" in2="goo" operator="atop" />
    </filter>
  </defs>
</svg>
<div class="loader">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>
<!--END CUSTOM -->

</div>
</div>
<!-- END MODAL -->


		<noscript><style>body { visibility: visible; }</style></noscript>
	</body>
  
</html>
