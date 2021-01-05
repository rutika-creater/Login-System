<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
?>
<html>
<head>
<tiitle>index</tittle>
</head>
<body>
<a href="logout.php">LOGOUT</a>
<h1>welcome   <?php echo $_SESSION['username']; ?></h1>
</body>
</html>
