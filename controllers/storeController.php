<?php
require_once 'config/Database.php';

class StoreController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from items');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] = './images/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO items (i_image, i_title, i_body)
        VALUES (:i_image, :i_title, :i_body)');

        $query->bindParam(':i_image', $request['image']);
        $query->bindParam(':i_title', $request['title']);
        $query->bindParam(':i_body', $request['body']);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from items WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $request['image'] = './images/' .$request['image'];
        $query = $this->db->pdo->prepare('UPDATE items SET i_image = :i_image,
        i_title = :i_title, i_body = :i_body WHERE id = :id');
        $query->bindParam(':i_image', $request['image']);
        $query->bindParam(':i_title', $request['title']);
        $query->bindParam(':i_body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from items WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}
?>