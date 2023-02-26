<?php
include_once 'simpleUserClass.php';
include_once 'adminClass.php';
require_once 'userMapper.php';
if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);
    $EmptyFields=$register->emptyFields();
    $EmailisValid = $register->validateEmail();
    $UsernameisValid = $register->validateUsername();
    $PasswordisValid = $register->validatePassword();
    $EmailExists=$register->emailExists();
    $UsernameExists=$register->usernameExists();
    if($EmailisValid && $UsernameisValid && $PasswordisValid && !$EmailExists && !$UsernameExists){
        $register->insertData();
        $message = "Registered successfully!";
    header("Location:login.php?error=".urlencode($message));
    } else if($EmptyFields){
        $message = "Fill all fields.";
        header("Location:register.php?error=".urlencode($message));
    }
    else if(!$EmailisValid){
    $message = "Email invalid!";
    header("Location:register.php?error=".urlencode($message));
}
else if($EmailExists){
    $message = "Email exists!";
    header("Location:register.php?error=".urlencode($message));
}
else if($UsernameExists){
    $message = "Username exists!";
    header("Location:register.php?error=".urlencode($message));
}
else if(!$UsernameisValid){
    $message = "Username invalid!";
    header("Location:register.php?error=".urlencode($message));
}else if(!$PasswordisValid){
    $message = "Password invalid!";
    header("Location:register.php?error=".urlencode($message));
}
}

class RegisterLogic
{
    private $email="";
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->email = $formData['register-emailaddress'];
        $this->username = $formData['register-username'];
        $this->password = $formData['register-password'];
    }


    public function emptyFields(){
        if(empty($this->email) || empty($this->username)|| empty($this->password)){
            return true;
        }
        return false;
    }

    public function validateEmail(){
        $emailRegex = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
        
        if(preg_match($emailRegex, $this->email)){
            return true;
        } else {
            return false;
        }
    }
    public function validateUsername(){
        $usernameRegex = "/^[a-zA-Z0-9._-]{3,15}$/";
        
        if(preg_match($usernameRegex, $this->username)){
            return true;
        } else {
            return false;
        }
    }
    public function validatePassword(){
        $passwordRegex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/";
        
        if(preg_match($passwordRegex, $this->password)){
            return true;
        } else {
            return false;
        }
    }
    public function emailExists()
    {
            $mapper = new UserMapper();
            if ($mapper->emailExists($this->email)) {
                return true;
            } else {
                return false;
            }
    }

    public function usernameExists()
    {
            $mapper = new UserMapper();
            if ($mapper->usernameExists($this->username)) {
                return true;
            } else {
                return false;
            }
    }

    public function insertData()
{
    $mapper = new UserMapper();

    $numUsers = $mapper->countUsers();

    if ($numUsers < 2) {

        $role = 1;
    } else {

        $role = 0;
    }

    $user = new SimpleUser($this->email, $this->username, $this->password, $role);

    $mapper->insertUser($user);
    header("Location:../index.php");
}


    public function insertDataAdmin(){
        $admin = new Admin($this->email, $this->username, $this->password,1);

        $mapper = new UserMapper();
        $mapper->insertUser($admin);
        header("Location:../views/menuDashboard.php");
    }
    
}