<!DOCTYPE html>
<html>

<head>
    <script src="Script%20js/login.js" defer></script>
    <link rel="Stylesheet" href="Stylesheets/login.css">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>

<?php

session_start();

if(isset($_COOKIE["user"])||isset($_SESSION["user"])){
    //Se é già stato effettuato l'accesso, reindirizza all' area personale
    header("location:account.php");
}

$error=false;

if(isset($_POST["username"])&&isset($_POST["password"])){

    $db_connection=mysqli_connect("localhost","root","","dream_viaggi") or die("Errore: ".mysqli_connect_error());
    $username=mysqli_real_escape_string($db_connection,$_POST["username"]);
    $password=mysqli_real_escape_string($db_connection,$_POST["password"]);
    $db_query="select username from registered_users r where r.username='".$username."'and r.password='".$password."'";
    $db_query_result=mysqli_query($db_connection,$db_query);

    if(mysqli_num_rows($db_query_result)==1){
        /*credenziali corrette*/
        if(isset($_POST["remember_user"])){
           //Se è stato spuntato il checkbox "Resta collegato" memorizza un cookie standard
            setcookie("user",$_POST['username'],time()+86400*30);
        }
        $_SESSION["user"]=$_POST["username"];
        header("location:home.php");
        exit;
    }
    else{
        /*credenziali errate*/
        $error=true;
    }
}

?>
    <form name="login_form" method="post">
        <div id="authentication">
            <div id="credentials">
                <label> Nome utente <input type="text" name="username"> </label>
                <label> Password <input type="password" name="password"> </label>
                <div id="bottom">
                   <span><input type="checkbox" name="remember_user" value="remember_user">Resta collegato</span>
                   <input type="submit" name="LogIn" value="Login">
                </div>
               <div class="register"><div>Se non hai ancora un account</div><a href="signup.php">registrati</a></div>
            </div>
           

        </div>

        
    </form>

    <?php
    if($error==true){
        echo "<div class='wrong_login'>Credenziali errate!</div>";
        $error=false;
    }
    ?>

    <div class='no_username'>Username mancante!</div>
    <div class='no_password'>Password mancante!</div>


</body>

</html>