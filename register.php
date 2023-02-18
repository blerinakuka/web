<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <title>Login And Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="css/login.css">
 <script src="javascript/script.js"></script>
</head>
<?php
 include 'subComponents/header.php';

?>
<body>
  
  <div class="container">
    <div class="card">
      <div class="inner-box" id="card">
      <div class="card-font">
    <h2>REGISTER</h2>
    <form class="login_form" action="./register.html" method="post" name="form" onsubmit="return validated()">
        <input type="email" class="input-box" name="email" placeholder="Email" required>
        <div id="email_error">Fill out your email correctly</div>
  <input type="text" class="input-box" name="username" placeholder="Username" required>
  <div id="name1_error">Fill out your username correctly</div>
  <input type="password" class="input-box" name="password" placeholder="Password" required>
  <div id="password_error">Fill out your password correctly</div>
   <button type="submit" class="submit-btn" >Submit</button>   
  </form>
  <div class="acc">
  <a href="login.php" class="acc">Already have an account?</a></div>
 
      </div>
     
    
      </div>
    </div>
  </div>
  

 <section>
  <section>
    <div class="contact">
      <div class="contact1">
      <h1>Contact Us</h1><br>
      <h3 class="nr1">+383 1000 1000 </h3>
    </div>
    <div class="hotline">
      <h1>Hotline</h1><br>
      <h3 class="nr2">Monday and Thursday: 9am – 1pm</h3>
    </div>
    </div>
    </section>
<footer class="footer">
  <div class="container1">
    <div class="row">
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="shop.html">Products</a></li>
          <li><a href ="contact.html">Contact us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Highlights</h4>
        <ul>
          <li><a href="shop.html">Cleanser</a></li>
          <li><a href="shop.html">Rose Water  <br>Toner</a></li>
          <li><a href="shop.html">Brightening <br> Moisturizer</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>               
  </div>
</footer>
<script src="javascript/register.js"></script>
</body>
</html>