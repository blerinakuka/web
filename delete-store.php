<?php
require_once 'controllers/StoreController.php';
    if(isset($_GET['id'])){
        $storeId = $_GET['id'];
    }
    $store = new StoreController;
    $store->delete($storeId);
?>