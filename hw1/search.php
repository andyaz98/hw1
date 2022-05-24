<!DOCTYPE html>
<html>

<head>
    
    <link rel="Stylesheet" href="Stylesheets/search.css">
    <title>Strumento di ricerca</title>
    <script src="Script%20js/search.js" defer></script>
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
        <div><a href="account.php">Area personale</a></div>
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
                <div id="subtitle">Strumento di ricerca</div>
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

<div class="section-container">

<section class="search">

<form name="search_form" method="get">
        <div id="authentication">
            <div id="credentials">
                <label><div>Aeroporto di partenza</div><input type="text" name="departure"> </label>
                <label><div>Aeroporto di arrivo</div><input type="text" name="arrival"> </label>
                <div id="bottom">
                   <span><input type="checkbox" name="direct_flights" value="direct_flights" id="direct">Cerca voli multiscalo</span>
                   <input type="submit" name="Search" value="Cerca">
                </div>
            </div>
           

        </div>

        
    </form>

</section>

<section class="results">

</section>

</div>

<footer>
        <!--Flex Container FOOTER inizio-->

        <div>
            Andrea Azzaro O46001884
        </div>
    </footer>

</body>

</html>