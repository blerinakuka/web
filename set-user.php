<?php 
  require_once 'new/userMapper.php';

  if(isset($_GET['id'])) {
    $userID = $_GET['id'];
    $mapper = new userMapper();
    $mapper->makeAdminUser($userID);
    header('Location: menuDashboard.php');
    exit;
  }
?>