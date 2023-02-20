<?php
require_once './controllers/MenuControllerr.php';
if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}

$menu = new MenuControllerr;
$currenMenu = $menu->edit($menuId);

if(isset($_POST['submit'])) {
    $menu->update($_POST, $menuId);
}

?>

<form method="POST" class="editM">
    Image:
    <input type="file" class="inputF" name="image" value="<?php echo $currenMenu['menu_image'];?>">
    <br>
    Title:
    <input type="text" class="inputT" name="title" maxlength="50" value="<?php echo $currenMenu['menu_title'];?>">
    <br>
    Body:
    <input type="text" class="inputta" name="body" cols="30" rows="10" maxlength="200" value="<?php echo $currenMenu['menu_body'];?>">
    <br>
    <input type="submit" class="but" name="submit" value="Update">
</form>


<style>
    .editM {
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