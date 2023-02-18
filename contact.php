<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css"  href="css/contact.css">
  </head>
  <?php
 include 'subComponents/header.php';

?>

  <body>

<div id="overlay">
<form onsubmit="event.preventDefault(); validateForm()">
  <h1>Contact Us</h1>
  <label for="name">Name:</label>
  <input type="text" id="name" placeholder="Your Name">
  <small class="error"></small>

  <label for="email">Email:</label>
  <input type="text" id="email" placeholder="Your Email">
  <small class="error"></small>

  <label for="message">Message:</label>
  <textarea id="message" placeholder="Your message" rows="6"></textarea>
  <small class="error"></small>

  <div class="center">
    <input type="submit" value="Send Message">
    <p id="success"></p>
  </div>
</form>
</div>
<script src="javascript/contact.js"></script>

<?php
 include 'subComponents/footer.php';
?>

</body>
</html>