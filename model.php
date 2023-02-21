<?php
class Model
{
    private $server = "localhost";
    private $username = "root";
    private $password = '';
    private $database = "ProjektiWeb";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $ex) {
            echo 'Connection failed' . $ex->getMessage();
        }
    }


    public function insert()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo $name ;
            echo $email ;
            echo $password ;

            $query = "INSERT INTO users (Username, Password, Email) VALUES ('$name','$password', '$email')";
            if ($sql = $this->conn->query($query)) {
                echo "<script>alert('User registered successfully');</script>";
                echo "<script>window.location.href = 'dashboard.php';</script>";
            } else {
                echo "<script>alert('failed');</script>";
                echo "<script>window.location.href = 'dashboard.php';</script>";
            }
        }
    }

    public function teamfetch()
    {
        $data = null;
        $query = "SELECT * FROM TeamContent";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function homefetch()
    {
        $data = null;
        $query = "SELECT * FROM HomeContent";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function menufetch()
    {
        $data = null;
        $query = "SELECT * FROM menucontent";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


    public function fetch()
    {
        $data = null;
        $query = "SELECT * FROM users";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($id)
    {

        $query = "DELETE FROM users where ID = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id)
    {

        $data = null;

        $query = "SELECT * FROM users WHERE ID = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {

        $query = "UPDATE users SET Username='$data[Username]', Email='$data[Email]', Password='$data[Password]'  WHERE ID='$data[ID] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }


}
?>