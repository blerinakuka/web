<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Work+Sans&display=swap" rel="stylesheet">
    <title>Blip | Dashboard</title>
 
    <style>
      :root{
    --main-color:#7c9ad1;
    --secondary-color: #acd8e4; 
    }
      .container{
        padding-top: 2%;
        padding-left: 15%;
        padding-right: 15%;
        justify-content: center;
        height: 93.5vh;
      }
      body{
        background-image: linear-gradient(var(--main-color),var(--secondary-color));
        background-repeat: no-repeat;
        font-family: 'Work Sans', sans-serif;
      }
      .row {
          justify-content: center;
      }

      .btn {
          background-color: black;
          padding: 5px 10px;
          border-radius: 0px;
          border: 1px solid black;
          text-align: center;
          color: #f3f1f1;
          transition: .4s;
      }
      .btn:hover {
          background-color: white;
          color: black;
          border: 1px solid black;
      }
      a {
          text-decoration: none;
          color: #3b3b3b;
          font-weight: bold;
          padding-left: 2px;
          padding-right: 2px;
          transition: .4s;
          border-radius: 2px;
      }
      a:hover {
          background-color: #acd8e4;
      }

      .delete{
        background-color: red;
        border-radius: 2px;
        font-size: 14px;
        color: #f3f1f1;
      }

      .edit{
        background-color: green;
        border-radius: 2px;
        font-size: 14px;
        color: #f3f1f1;
      }

      .Header{
        color: #0f0f0f;
        font-size: 45px;
      }

      .table{
        margin-top: 2%;
        width: 100%;
        text-align: center;
      }

      .buttons{
        display: flex;
        width: 94%;
        justify-content: space-between;
      }

 
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="Header">Blip | Dashboard</h1>
          <hr style="height: 2px;background-color: black; margin-bottom: 3%;border: 0;">
        </div>
      </div>
      <div class="buttons">
      <a href="Signup.php" class="btn">Add New User</a>
      <a href="index.php" class="btn">Home</a>
      </div>
      <div class="row">
        <div class="inside">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include 'Model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td>
                  <a href="tel:<?php echo $row['Password'];?>"> <?php echo $row['Password'];?></a>
                </td>
                <td>
                  <a href="mailto:<?php echo $row['Email'];?>"> <?php echo $row['Email'];?></a>
                </td>
                <td>
                  <a href="delete.php?ID=<?php echo $row['ID']; ?>" class="delete">Delete</a>
                  <a href="edit.php?ID=<?php echo $row['ID']; ?>" class="edit">Edit</a>
                </td>
              </tr>
 
              <?php
                }
              }else{
                echo "no data";
            }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>