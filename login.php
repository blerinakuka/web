<?php

$server = "localhost";
$username = "root";
$password = '';
$database = "ProjektiWeb";

$data=mysqli_connect($server,$username,$password,$database);

if($data===false){
  die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["username"];
  $password=$_POST["password"];

  $sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ";

  $result=mysqli_query($data,$sql);

  $row = mysqli_fetch_array($result);


  if($row["usertype"]=="user"){

    $_SESSION["username"]=$username;
    header("location:home.php");

  }

  elseif($row["usertype"]=="admin"){

    $_SESSION["username"]=$username;
    header("location:dashboard.php");
    
  }

  // if(isset($_POST["submit"])){
  //   $myInput=$_POST["username"];
  //   if(preg_match("/^[A-Za-z][A-Za-z0-9_]{7,29}$/", $myInput)){
  //     echo "Valid Name";
  //   }else{
  //     echo"Enter Valid Name";
  //   }
  // }
 

}

?><!DOCTYPE html>

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
  <div class="loginbody">
    <div class="card">
      <div class="inner-box" id="card">
<<<<<<< HEAD
      <div class="card-font">
    <h2>LOGIN</h2>
    <form class="login_form" action="" method="post" name="form" onsubmit="return validated()">
  <input type="text" class="input-box" name="username" placeholder="Username" required>
  <div id="name1_error">Fill out your username correctly</div>
  <input type="password" class="input-box" name="password" placeholder="Password" required>
  <div id="password_error">Fill out your password correctly</div>
   <button type="submit" class="submit-btn" >Submit</button>   
  </form>
  <a href="register.php" class="acc">Don't have an account?</a>
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

        <div class="card-font">
          <h2>LOGIN</h2>
          <form class="login_form" action="./login_handler.php" method="post" name="form" onsubmit="return validated()">
            <input type="text" class="input-box" name="username" placeholder="Username" required>
            <div id="name1_error">Fill out your username correctly</div>
            <input type="password" class="input-box" name="password" placeholder="Password" required>
            <div id="password_error">Fill out your password correctly</div>
            <button type="submit" class="submit-btn">Submit</button>   
          </form>
          <a href="register.php" class="acc">Don't have an account?</a>

        </div>
      </div>
    </div>
  </div>
  <?php
    include 'subComponents/footer.php';
  ?>
  <script src="javascript/validation.js"></script>
</body>
</html> 

