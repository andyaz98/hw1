<?php

session_start();

if(isset($_SESSION["user"])){
    if(isset($_GET["fav"])){
        echo $_SESSION["user"]." ha eliminato ".$_GET["fav"]." dai preferiti!";

        $db_connection=mysqli_connect("localhost","root","","dream_viaggi") or die("Errore: ".mysqli_connect_error());
        $username=mysqli_real_escape_string($db_connection,$_SESSION["user"]);
        $db_query="delete from favourites where username='".$username."' and favourites='".$_GET["fav"]."'";
        $db_query_success=mysqli_query($db_connection,$db_query);
        echo $db_query_success;
        mysqli_close($db_connection);

    }
}
else if($_COOKIE["user"]){
    if(isset($_GET["fav"])){
        echo $_COOKIE["user"]." ha eliminato ".$_GET["fav"]." dai preferiti!";

        $db_connection=mysqli_connect("localhost","root","","dream_viaggi") or die("Errore: ".mysqli_connect_error());
        $username=mysqli_real_escape_string($db_connection,$_COOKIE["user"]);
        $db_query="delete from favourites where username='".$username."' and favourites='".$_GET["fav"]."'";
        $db_query_success=mysqli_query($db_connection,$db_query);
        echo $db_query_success;
        mysqli_close($db_connection);

    }
}
else{
    exit;
}


?>
