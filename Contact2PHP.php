<?php
require_once 'controllers/contactController.php';

if (isset($_POST['submit-btn'])) {
    $contact = new Contact($_POST);
    $contact->insertData();
    return header("Location:contact.php");
}

class Contact
{
    private $name="";
    private $email = "";
    private $message = "";

    public function __construct($formData)
    {
        $this->name = $formData['name'];
        $this->email = $formData['email'];
        $this->message = $formData['message'];
    }

    
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getMessage()
    {
        return $this->message;
    }
    
    public function insertData()
    {
        $contact = new Contact([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        
        $controller = new contactController();
        $controller->insertContact($contact);
        header("Location:index.php");
    }
}
    ?>