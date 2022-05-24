<!DOCTYPE html>
<html>

<head>
    
    <link rel="Stylesheet" href="logout.css">
    <title>Logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php

session_start();

setcookie("user","");
session_destroy();
header("location:home.php");
exit;

?>

</body>

</html>