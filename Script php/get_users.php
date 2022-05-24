
<?php
        session_start();

        $users=array();

        $db_connection=mysqli_connect("localhost","root","","dream_viaggi") or die("Errore: ".mysqli_connect_error());
        $db_query="select username from registered_users";
        $db_query_result=mysqli_query($db_connection,$db_query);

        while($db_row=mysqli_fetch_assoc($db_query_result)){

            //print_r($db_row);

            $users[]=$db_row;
        }

        mysqli_free_result($db_query_result);
        mysqli_close($db_connection);

        echo json_encode($users);
        
?>
