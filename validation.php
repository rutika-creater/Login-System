<?php
session_start();

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "12345");
define("DB_DATABASE", "userregistration");

$con = mysqli_connect('localhost' ,'root', '12345', 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM  usertable where name = '$name' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['username']=$name;
    header('location:index.php');
}
else{
    header('location:login.php');
}