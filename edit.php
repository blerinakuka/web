<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Work+Sans&display=swap" rel="stylesheet">
    <title>Blip | Dashboard</title>
 
    <style>
      *{
      margin: 0;
      padding: 0;
      font-family: 'Work Sans', sans-serif;
     }

    :root{
        --main-color:#7c9ad1;
        --secondary-color:#acd8e4; 
        --gray-color: #f3f1f1;
        --text-gray: #8a8888;
        --text-black: #3b3b3b;
    }
    
    .input-container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 10px 0px;
  }

    .container{
        height: 100vh;
        background-image: linear-gradient(var(--main-color),var(--secondary-color));
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .btn {
          background-color: black;
          padding: 5px 10px;
          border-radius: 0px;
          border: 1px solid black;
          text-align: center;
          color: #f3f1f1;
          transition: .4s;
          cursor: pointer;
          margin-bottom: 2%;
      }
      .btn:hover {
          background-color: white;
          color: black;
          border: 1px solid black;
      }

      .Header{
        font-size: 45px;
      }

      .label{
        padding-right: 4%;
      }

    </style>
 </head>
 <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="Header">Blip | Dashboard</h1>
          <hr style="height: 2px;background-color: black;border: 0;margin-bottom: 5%;margin-top: 2%;">
        </div>
      </div>
      <div class="row">
        <div>
          <?php
              include 'Model.php';
              $model = new Model();
              $id = $_REQUEST['ID'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['Email']) ) {
                     
                    $data['ID'] = $id;
                    $data['Username'] = $_POST['Username'];
                    $data['Password'] = $_POST['Password'];
                    $data['Email'] = $_POST['Email'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('User update successful');</script>";
                      echo "<script>window.location.href = 'dashboard.php';</script>";
                    }else{
                      echo "<script>alert('User update failed');</script>";
                      echo "<script>window.location.href = 'dashboard.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('Empty');</script>";
                    header("Location: edit.php?ID=$id");
                  }
                }
          ?>
          <form action="" method="post">
            <div class="input-container">
              <label for="" class="label">Name</label>
              <input type="text" name="Username" value="<?php echo $row['Username']; ?>" >
            </div>
            <div class="input-container">
              <label for="" class="label">Password</label>
              <input type="text" name="Password" value="<?php echo $row['Password']; ?>" >
            </div>
            <div class="input-container">
              <label for=""  class="label">Email</label>
              <input type="email" name="Email" value="<?php echo $row['Email']; ?>" >
            </div>
            <div class="input-container">
              <button type="submit" name="update" class="btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>