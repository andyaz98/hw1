<!DOCTYPE html>
<html>

<head>
    
    <link rel="Stylesheet" href="Stylesheets/account.css">
    <title>Area personale</title>
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

<nav>
        <!--Flex Container NAV inizio-->
        <div><a href="home.php">Home</a></div>
        <div><a href="favourites.php">Preferiti</a></div>
        <div><a href="search.php">Cerca voli</a></div>
        <div><a href="logout.php">Logout</a></div>
    </nav>



<header>


        <div id="overlay">
            <img id="background" src="Images/background.jpeg" />
            <div id="layer"></div>

            <div id="title_container">
                <div id="title_1">Dream </div>
                <div id="title_2">Viaggi</div>
            </div>

            <div id="subtitle_container">
                <div id="subtitle">AREA PERSONALE</div>
            </div>

        </div>

        <div id="user_img_container">
            <img id="user_img" src="Images/user.jpeg" />
        </div>

        <div id="user_container">
            <div id="user">
                <?php
                session_start();
                if(!isset($_SESSION["user"])&&!isset($_COOKIE["user"])){
                    header("location: login.php");
                    exit;
                }else if(isset($_COOKIE["user"])){

                    echo "Ciao ".$_COOKIE["user"]."!";
                }
                else{

                    echo "Ciao ".$_SESSION["user"]."!";
                }
                
                ?>
            </div>
        </div>



    </header>

    <section>
        
    </section>

    <footer>
        <!--Flex Container FOOTER inizio-->

        <div>
            Andrea Azzaro O46001884
        </div>
    </footer>


</body>

</html>