
<?php
        session_start();

        $favourites=array();

        $db_connection=mysqli_connect("localhost","root","","dream_viaggi") or die("Errore: ".mysqli_connect_error());
        if(isset($_SESSION["user"])){
            $username=mysqli_real_escape_string($db_connection,$_SESSION["user"]);
        }
        else if(isset($_COOKIE["user"])){
            $username=mysqli_real_escape_string($db_connection,$_COOKIE["user"]);
        }
        $db_query="select favourites from favourites f where f.username='".$username."'";
        $db_query_result=mysqli_query($db_connection,$db_query);

        while($db_row=mysqli_fetch_assoc($db_query_result)){

            //print_r($db_row);

            $favourites[]=$db_row;
        }

        mysqli_free_result($db_query_result);
        mysqli_close($db_connection);

        echo json_encode($favourites);
        
?>
