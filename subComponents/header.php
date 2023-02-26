<?php
include_once 'new/adminClass.php';
include_once 'new/simpleUserClass.php';
session_start();
?>

<header>
      <nav>
        <h2 class="logo">CLEAR<span>+</span></h2>
        <ul>
            <li><a href ="index.php">Home</a></li>
            <li><a href ="about.php">About us</a></li>
            <li><a href ="shop.php">Products</a></li>
            <li><a href ="news.php">Our Impact</a></li>
            <li><a href ="contact.php">Contact Us</a></li>
            <?php 
                
                if (isset($_SESSION['loggedin'])) { 
                    
                    echo '<li><a href="new/logout.php" class="hovernav">log out</a></li>';
                    
                    if ($_SESSION['role'] == 1) { // If user is an admin, show dashboard button
                      
                        echo '<li><a href="menuDashboard.php" class="hovernav">dashboard</a></li>';
                    }
                } else { // If user is not logged in, show login button
          
                   echo ' <li><a href="login.php" class="hovernav">login</a></li>';
                 } ?>

        </ul>
    </nav> 
  </header>