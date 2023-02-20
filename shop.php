
<?php
require_once './controllers/MenuControllerr.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css"  href="css/shop.css">
    <script src="javascript/script.js"></script>
</head>
<?php
 include 'subComponents/header.php';

?>
<body>
  <section class="thenjaa">
    <div class="thenja"> 
        <h1>Proven Results. Clean Ingredients.<br></h1>
      
    </div>
    <div class="thenja2">
        <p>Rejuvenate your skin with good-for-you skincare products.</p>
    </div>
</section>
<div class="krejtt">
  <?php
  $productss = new MenuControllerr;
  $alll = $productss->readData();
  for($i = 0; $i < count($alll); $i++) {
    echo '<div class="produktett">
      <div class="productt">
        <img src="' .$alll[$i]['menu_image'] .'">
        <h5>' .$alll[$i]['menu_title'] .'<h5>
        <p>' .$alll[$i]['menu_body'] .'</p>
      </div>
    </div>';
  } 
  ?>
</div>

<?php
 include 'subComponents/footer.php';
?>
</body>
</html>
