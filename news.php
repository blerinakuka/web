<?php
require_once './controllers/MenuController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css"  href="css/news.css">
    <script src="javascript/script.js"></script>
</head>
<?php
 include 'subComponents/header.php';

?>
<body>
<div class="krejt">
    <?php
    $products = new MenuController;
    $all = $products->readData();
    for($i = 0; $i < count($all); $i++) {
        echo '<div class="produktet">
        <div class="foto">
            <img src="' .$all[$i]['menu_image'] .'">
        </div>
        <div class="shkrimi">
            <h5>' .$all[$i]['menu_title'] .'<h5>
            <p>' .$all[$i]['menu_body'] .'</p>
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