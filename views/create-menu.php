<?php
require_once '../controllers/MenuController.php';

$menu = new MenuController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}


?>
<div>
    <form method="POST" class="createM">
        Image:
        <input type="file" name="image" class="inputF" >
        <br>
        Title:
        <input type="text" name="title" class="inputT" maxlength="50">
        <br>
        Content:
        <textarea name="body" cols="30" rows="10" class="inputta" maxlength="100"></textarea>
        <br>
        <input type="submit" name="submit" value="Save" class="but">
    </form>
</div>

<style>
    .createM {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px;
}

.inputF {
    text-align: center;
  margin: 10px 0;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid gray;
  width: 100%;
  max-width: 300px;
}

.inputT {
  margin: 10px 0;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid gray;
  width: 100%;
  max-width: 300px;
}

.inputta {
    min-width: 300px;
  margin: 10px 0;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid gray;
  width: 100%;
  max-width: 300px;
  min-height: 50px;
  max-height: 300px;
}

.but {
  margin: 10px 0;
  padding: 5px;
  border-radius: 5px;
  border: none;
  background-color: #0077FF;
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
}

.but:hover {
  background-color: #0066CC;
}

</style>