<!DOCTYPE html>
<html>

<head>
    
    <link rel="Stylesheet" href="Stylesheets/favourites.css">
    <title>Preferiti</title>
    <script src="Script%20js/get_favourites.js" defer></script>
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
        <div><a href="account.php">Area personale</a></div>
        <div>Chi siamo</div>
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
                <div id="subtitle">I TUOI PREFERITI</div>
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
    <ul>

        


     </ul>
    </section>

    <footer>
        <!--Flex Container FOOTER inizio-->

        <div>
            Andrea Azzaro O46001884
        </div>
    </footer>

    







</body>

</html>