<?php 
require_once '../new/userMapper.php';
include_once '../new/adminClass.php';

$mapper = new userMapper();
if(isset($_GET['id'])){
    $adminId = $_GET['id'];
}

$currentAdmin = $mapper->getUserByID($adminId);
$admin = new Admin($currentAdmin['email'], $currentAdmin['username'], $currentAdmin['userpassword'], $currentAdmin['role']);

if(isset($_POST['Submit'])){
    $admin->setEmail($_POST['register-emailaddress']);
    $admin->setUsername($_POST['register-username']);
    $admin->setPassword($_POST['register-password']);
    $mapper->edit($admin,$adminId);
    header("Location:menuDashboard.php");
    exit();
}

?>
<form method="POST" class="editM"> 
    <label for="register-emailaddress">Email:</label>
    <input type="text" name="register-emailaddress" id="register-emailaddress" class="inputF" value="<?php echo $admin->getEmail(); ?>">

    <label for="register-username">Username:</label>
    <input type="text" name="register-username" id="register-username" class="inputF" value="<?php echo $admin->getUsername(); ?>">

    <label for="register-password">Password:</label>
    <input type="password" name="register-password" id="register-password" class="inputF" value="<?php echo $admin->getPassword(); ?>">

    <input type="submit" name="Submit" value="Save" class="but">
</form>


<style>
    .editM {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px;
}
*{
  font-family: sans-serif; 
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
  background-color: rgba(19, 117, 58, 0.911);
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
}

.but:hover {
  color: black;
}

</style>