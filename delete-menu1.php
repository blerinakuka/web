<?php
    require_once './controllers/MenuControllerr.php';
    if(isset($_GET['id'])){
        $menuId = $_GET['id'];
    }
    $menu = new MenuControllerr;
    $menu->delete($menuId);
?>

