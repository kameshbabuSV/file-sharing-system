<?php 
global $con;
$dbh=new PDO("mysql:host=localhost;dbname=filesharesystem","root","");
$server="localhost";
$user="root";
$password="";
$db="filesharesystem";
$con=mysqli_connect($server,$user,$password,$db);

$dbh=new PDO("mysql:host=localhost;dbname=filesharesystem","root","");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>