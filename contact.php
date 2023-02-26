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
 include 'Contact2PHP.php'?>

  <body>

<div id="overlay">
<form class="contact-form" action="Contact2PHP.php" method="post" name="form" onsubmit="return validated()">
              <div class="txt_field">
                <input autocomplete="off" type="text" name="name" placeholder="Name: " id="name" required>
                <span></span>
              </div>
              <div class="txt_field">
                <input autocomplete="off" type="email" name="email" placeholder="Email: " id="email" required>
                <span></span>
              </div>
              <textarea id="subject" name="message" placeholder="Type your message here:" id="message" rows="10" cols="70"></textarea>
              <input type="submit" name="submit-btn" value="SEND">
</div>
</form>

</div>
<script src="javascript/contact.js"></script>

<?php
 include 'subComponents/footer.php';
?>

</body>
</html>