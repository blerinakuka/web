<?php 
    require_once 'new/userMapper.php';
    require_once 'new/registerController.php';

    if(isset($_POST['Submit'])){
         $rl=new RegisterLogic($_POST);
         $rl->insertDataAdmin();
    }
    
?>

<form method="POST" class="register-form"> 
    Email:
    <input type="text" name="register-emailaddress" class="inputF">
    <br>
    Username
    <input type="text" name="register-username" class="inputF">
    <br>
    Password:
    <input type="password" name="register-password" class="inputF">
    <br>
    <input type="Submit" name="Submit" value="Save" class="but">
</form>

<style>
    .register-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px;
    }
    
    * {
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

