<!DOCTYPE html>
<html>

<head>
    <script src="Script%20js/signup.js" defer></script>
    <link rel="Stylesheet" href="Stylesheets/signup.css">
    <title>Signup</title>
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

if(isset($_SESSION["user"])||isset($_COOKIE["user"])){
    header("location:account.php");
}

//Se sono presenti dati post, vuol dire che la validazione lato client è avvenuta con successo
if(isset($_POST["username"])&&isset($_POST["password"])){

$error=false;

//Inserisco il nuovo utente nel database, effettuando le opportune validazioni lato server
$db_connection=mysqli_connect("localhost","root","","dream_viaggi") or die("Errore: ".mysqli_connect_error());
$username=mysqli_real_escape_string($db_connection,$_POST["username"]);
$password=mysqli_real_escape_string($db_connection,$_POST["password"]);
$db_query="insert into registered_users values('".$username."','".$password."')";
$db_query_result=mysqli_query($db_connection,$db_query);
mysqli_close($db_connection);

if($db_query_result==1){
    /*Registrazione avvenuta*/
    $_SESSION["user"]=$_POST["username"];
    echo"<div class='success'>Registrazione avvenuta con successo!<a href='account.php'> Vai all'area personale</a></div>";
}
else{
    /*Si é verificato un errore*/
    $error=true;
}
}
else{
    //Se non sono presenti dati post, mostra il form
    echo'<form name="login_form" method="post">
    <div id="authentication">
        <div id="credentials">
            <label> Nome utente <input type="text" name="username"> </label>
            <label> Password <input type="password" name="password"> </label>
            <div id="bottom">
               <input type="submit" name="LogIn" value="Registrati">
            </div>
           <div class="register"><div>Se sei già registrato</div><a href="login.php">vai al login</a></div>
        </div>
       

    </div>

    
</form>';

}

?>
    <!--Questi div verranno mostrati se vengono riscontrati errori durante la validazione delle credenziali lato client-->
    <div class='hidden no_username'>Username mancante!</div>
    <div class='hidden no_password'>Password mancante!</div>
    <div class='hidden short_username'>L'username deve contenere almeno 4 caratteri!</div>
    <div class='hidden long_username'>L' username può contenere al massimo 10 caratteri!</div>
    <div class='hidden used_username'>Username già in uso!</div>
    <div class='hidden short_password'>La password deve contenere minimo 8 caratteri!</div>
    <div class='hidden pwd_username'>La password non può essere uguale all'username!</div>
    <div class='hidden pwd_upper'>La password deve contenere almeno una lettera maiuscola!</div>
    <div class='hidden pwd_special'>La password deve contenere almeno un carattere speciale!</div>

    <?php
    //Se si dovesse verificare un errore lato server, mostra il seguente messaggio
    if($error){
        echo"<div class='bad_signup'>Spiacenti, si è verificato un errore nel server</div>";
    }
    
    ?>

</body>

</html>