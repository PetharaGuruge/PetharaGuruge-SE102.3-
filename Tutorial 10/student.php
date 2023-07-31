<?php 

$conn = mysql_connect("localhost", "root", "", "universtiy");

if($conn){
    die("Error");
}

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$squl = "insert into students(id, name, email, password) values(".$id."','".$name."','".$email."','".$password.")";

$squl->query($squl)

?>