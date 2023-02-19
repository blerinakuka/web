<?php
require_once './controllers/MenuController.php';
?>

<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: rgb(205, 172, 150);
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table td:nth-child(3) {
  width: 50%; /* adjust as needed */
  white-space: pre-wrap;
}


.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
.button {
        border: none;
        padding: 6px 20px;
        border-radius: 0;
        color: #ffffff;
        background: black;
        font-weight: bold;
        font-size: 15px;
}

.edit-button {
  color: #ffffff;
        text-decoration: none;
        font-weight: bold;
}

.delete-button {
  color: #ffffff;
        text-decoration: none;
        font-weight: bold;
}

    .button:hover{
        cursor: pointer;
        border: 1px solid rgb(189, 189, 189);
        color: rgb(189, 189, 189);
    }


</style>
<header>
      <nav>
        <h2 class="logo">CLEAR<span>+</span></h2>
        <ul>
            <li><a href ="index.php">Home</a></li>
            <li><a href ="create-menu.php">Create</a></li>
            <li><a href ="news.php">News</a></li>
            

           

            <button type="button"><a href=login.php>Login</a></button>

        </ul>
    </nav> 
  </header>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Text</th>
              <th></th>
              <th></th>
            </tr>
        </thead>
        <tbody>
          <?php
          $m = new MenuController;
          $allMenu = $m->readData();
          foreach($allMenu as $menu):
          ?>
          <tr>
            <td><?php echo $menu['menu_image']?></td>
            <td><?php echo $menu['menu_title']?></td>
            <td><?php echo $menu['menu_body']?></td>
            <td><a class="button edit-button" href="edit-menu.php?id=<?php echo $menu['Id'];?>">Edit</a></td>
            <td><a class="button delete-button" href="delete-menu.php?id=<?php echo $menu['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap%27');
*{
    padding:0;
    margin:0;
    box-sizing:border-box ;
    font-family: "Poppins", sans-serif;
    }
    /*navbar*/
    nav{
        position: sticky;
        display: flex;
        width:100%;
        background-color: #ffffff;
        align-items: center;
        justify-content: space-between;
        padding-top: 3px;
        padding-left: 7%;
        padding-right: 7%;
        padding-bottom: 5px;
        border-bottom: 0.1px solid rgb(202, 196, 196);
    }
    .logo{
        color:#000000;
        font-size: 36px;
    }
    span{
        color:rgb(205, 172, 150);
    }
    nav ul li{
        list-style-type: none;
        display: inline-block;
        padding:10px 20px;
    }
    nav ul li a{
        color: #000000;
        text-decoration: none;
        font-weight: bold;
    }
    nav ul li a:hover{
        color:rgb(205, 172, 150);
        transition: .3s; 
    }
    nav button{
        border: none;
        padding: 6px 20px;
        border-radius: 0;
        color: #ffffff;
        background: black;
        font-weight: bold;
        font-size: 15px;
    }
    nav button:hover{
        cursor: pointer;
        border: 2px solid rgb(189, 189, 189);
        color: rgb(189, 189, 189);
    }
    button a{
        color: #ffffff;
        text-decoration: none;
        font-weight: bold;

    }
  </style>