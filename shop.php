

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css"  href="css/shop.css">
    <script src="javascript/shop.js"></script>
    </head>
<?php
 include 'subComponents/header.php';

?>
<?php
include 'Model.php';
$model = new Model();
$rows = $model->shopfetch();
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
<div class="shopi">
    <div class="produktet">
        <div class="product ">
          <img src="<?php echo $rows[0]['image'];?>">
          <p><a href ="#"><?php echo $rows[0]['name'];?> <br> <?php echo $rows[0]['price'];?></a></p><br>
          <button type="button">SHOP NOW</button>
        </div>
       <div class="product ">
           <img src="<?php echo $rows[1]['image'];?>">
           <p><a href ="#"><?php echo $rows[1]['name'];?> <br> <?php echo $rows[1]['price'];?></a></p><br>
           <button type="button">SHOP NOW</button>
       </div>
       <div class="product ">
         <img src="images/seti3.webp">
         <p><a href ="#">Serum + moisturizer <br> $80</a></p><br>
         <button type="button">SHOP NOW</button>
         </div>
         <div class="product ">
            <img src="images/item1.webp">
            <p><a href ="#">Facial Cleanser <br> $20</a></p><br>
            <button type="button">SHOP NOW</button>
          </div>
       </div>
  <div class="produktet">

   <div class="product ">
       <img src="images/item2.webp">
       <p><a href ="#">Rose Water Toner <br>$17</a></p><br>
       <button type="button">SHOP NOW</button>
   </div>
<div class="product ">
     <img src="images/item3.webp">
     <p><a href ="#">Vitamin C Serum<br> $90</a></p><br>
     <button type="button">SHOP NOW</button>
   </div>
   <div class="product ">
    <img src="images/item4.webp">
    <p><a href ="#">Retinol Serum <br> $130</a></p><br>
    <button type="button">SHOP NOW</button>
  </div>
 <div class="product ">
     <img src="images/item5.webp">
     <p><a href ="#">Anti-Aging Eye Cream <br>$112</a></p><br>
     <button type="button">SHOP NOW</button>
 </div>
</div>
<div class="produktet">

   <div class="product ">
     <img src="images/item6.webp">
     <p><a href ="#">Hydrating Moisturizer <br> $53</a></p><br>
     <button type="button">SHOP NOW</button>
   </div>
   <div class="product ">
    <img src="images/item7.webp">
    <p><a href ="#">Brightening Moisturizer <br> $46</a></p><br>
    <button type="button">SHOP NOW</button>
  </div>
 <div class="product ">
     <img src="images/item8.webp">
     <p><a href ="#">Retinol Moisturizer <br>$130</a></p><br>
     <button type="button">SHOP NOW</button>
 </div>
 <div class="product ">
   <img src="images/item9.webp">
   <p><a href ="#">Detox  Mask <br> $30</a></p><br>
   <button type="button">SHOP NOW</button>
   </div>
   </div>

</div>

<?php
 include 'subComponents/footer.php';
?>
</body>
</html>