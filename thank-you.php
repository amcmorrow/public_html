<!DOCTYPE html>
<html>



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-container=no">

<style>
body {
  font-family: Arial, sans-serif;
  font-size: 14px;
  line-height: 1.5;
  color: #333;
}

p {
  margin-bottom: 15px;
}
</style>
</head>

<?php
if (isset($_GET['success']) && $_GET['success'] == 'true') {
  echo '<p>Thank you for contacting us. We will get back to you as soon as possible.</p>';
} else {
  echo '<p>Oops! Something went wrong. Please try again.</p>';
}
?>

</html>