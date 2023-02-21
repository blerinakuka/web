<?php
//Get values passe from form in login.php file
$username=$_POST['username'];
$password=$_POST['password'];
//to prevent mysq injection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);


//connect to the server and select database
mysql_connect("localhost","username","");
mysql_select_db("web");

//Query the database for user
$result =mysql_query("select *from users where username='$username' and password ='$password'")
                      or die("failed to query database "mysql_error());

$row =mysql_fetch_array($result);
if($row['username']==$username and $row['password']==$password){
echo "Login successfully!Welcome".$row['username'];
}else{
 echo "Failed to login !";
}




?>