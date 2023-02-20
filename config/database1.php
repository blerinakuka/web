<?php
class Database1{
    public $pdo;

    public function __construct(){
        try{
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $link = new PDO('mysql:host=localhost;dbname=shop', 'root','');
            $this->pdo = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
?>