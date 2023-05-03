<?php
require_once "config/database.php";
class contactController 
{
    public $db;
    private $query;

    public function __construct()
    {
        $this->db=new Database;
    }

   public function insertContact(\Contact $contact)
   {
    $query =$this->db->pdo->prepare("INSERT into contact (name, email, message) values (:name,:email,:message)");
       $name = $contact->getName();
       $email = $contact->getEmail();
       $message = $contact->getMessage();
       $query->bindParam(":name", $name);
       $query->bindParam(":email", $email);
       $query->bindParam(":message", $message);
       $query->execute();
   }

   public function getAllContacts()
   {
    $query =$this->db->pdo->query("SELECT * from contact");

    return $query->fetchAll();
   }

   public function deleteContact($contactid)
   {
    $query =$this->db->pdo->prepare("DELETE from contact where Id=:id");
    $query->bindParam(":id", $contactid);
    $query->execute();
        return header('Location: menuDashboard.php');
   }
}
?>