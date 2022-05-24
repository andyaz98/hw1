<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <script src="Script%20js/external%20apis/constants.js" defer></script>
    <script src="Script%20js/external%20apis/pixabay.js" defer></script>
    <script src="Script%20js/external%20apis/amadeus.js" defer></script>

    <script src="Script%20js/home.js" defer></script>
    <script src="Script%20js/add_to_favourites.js" defer></script>

    <link rel="Stylesheet" href="Stylesheets/home.css" />

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
    //Verifico che l' utente sia loggato
    $is_logged=false;
    if(isset($_COOKIE["user"])||isset($_SESSION["user"])){
        $is_logged=true;
      }
    ?>


    <nav>
        <!--Flex Container NAV inizio-->
        <div>Home</div>
        <div>Partners</div>
        <div>Chi siamo</div>
        <div>
            <?php
               if($is_logged){
                   //Se l' utente ha fatto il login, al click accederà all'area personale
                  echo "<a href=account.php>Area personale</a></div>";
                }
               else{
                   //Altrimenti andrà alla pagina di login
                  echo "<a href=login.php>Effettua l'accesso</a></div>";
                }
            ?>
        </div>
        <!--Flex Container NAV fine-->
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
                <div id="subtitle">Le 5 migliori destinazioni europee</div>
            </div>

        </div>

        <div id="pin_img_container">
            <img id="pin_img" src="Images/loc.jpeg" />
        </div>

        <div id="location_container">
            <div id="location">Sede di: CATANIA</div>
        </div>



    </header>


    <section>
        <div class="paragraph" data-destination-number="1" data-destination="Vilnius" data-destination-location-code="VNO">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
               

             <div class="fav">
              <?php
                if($is_logged){
                   //Se l' utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)
                  echo "<a class='add_to_fav' data-destination='Vilnius' href='#'>Aggiungi ai preferiti</a>";
                }
                else{
                   //Altrimenti andrà alla pagina di login
                  echo "<a class='no_login' href='login.php'>Aggiungi ai preferiti</a>";
                }
              ?> 
             </div>

            </div>
            <div class="paragraph-content">
            
            </div>
            <div class="flights" data-destination-number="1" data-destination="Vilnius">Ricerca miglior prezzo...</div>


        </div>

        <img data-destination-number="1" data-destination="Vilnius"/>

        

        </div>

        <div class="paragraph" data-destination-number="2" data-destination="Tallinn" data-destination-location-code="TLL">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
                
             <div class="fav">
              <?php
                if($is_logged){
                   //Se l' utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)
                  echo "<a class='add_to_fav' data-destination='Tallinn' href='#'>Aggiungi ai preferiti</a>";
                }
                else{
                   //Altrimenti andrà alla pagina di login
                  echo "<a class='no_login' href='login.php'>Aggiungi ai preferiti</a>";
                }
              ?> 
             </div>
            
            </div>
            <div class="paragraph-content">
            
            </div>
            


            <div class="flights" data-destination-number="2" data-destination="Tallinn">Ricerca miglior prezzo...</div>

        </div>

        <img data-destination-number="2" data-destination="Tallinn" />

        

        </div>

        <div class="paragraph" data-destination-number="3" data-destination="Warsaw" data-destination-location-code="WAW">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
               

             <div class="fav">
              <?php
                if($is_logged){
                   //Se l' utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)
                  echo "<a class='add_to_fav' data-destination='Varsavia' href='#'>Aggiungi ai preferiti</a>";
                }
                else{
                   //Altrimenti andrà alla pagina di login
                  echo "<a class='no_login' href='login.php'>Aggiungi ai preferiti</a>";
                }
              ?> 
             </div>
            
            </div>
            <div class="paragraph-content">
            
            </div>
            

            <div class="flights" data-destination-number="3" data-destination="Warsaw">Ricerca miglior prezzo...</div>

        </div>

        <img data-destination-number="3" data-destination="Warsaw"/>

        

        </div>

        <div class="paragraph" data-destination-number="4" data-destination="Zadar" data-destination-location-code="ZAD">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
               

             <div class="fav">
              <?php
                if($is_logged){
                   //Se l' utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)
                  echo "<a class='add_to_fav' data-destination='Zara' href='#'>Aggiungi ai preferiti</a>";
                }
                else{
                   //Altrimenti andrà alla pagina di login
                  echo "<a class='no_login' href='login.php'>Aggiungi ai preferiti</a>";
                }
              ?> 
             </div>
            
            </div>
            <div class="paragraph-content">
            
            </div>
            

            <div class="flights" data-destination-number="4" data-destination="Zadar">Ricerca miglior prezzo...</div>

        </div>


        <img data-destination-number="4" data-destination="Zadar"/>

        

        </div>

        <div class="paragraph" data-destination-number="5" data-destination="Riga" data-destination-location-code="RIX">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
               

            <div class="fav">
              <?php
                if($is_logged){
                   //Se l' utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)
                  echo "<a class='add_to_fav' data-destination='Riga' href='#'>Aggiungi ai preferiti</a>";
                }
                else{
                   //Altrimenti andrà alla pagina di login
                  echo "<a class='no_login' href='login.php'>Aggiungi ai preferiti</a>";
                }
              ?> 
            </div>

            </div>
            <div class="paragraph-content">
            
            </div>
            


            <div class="flights" data-destination-number="5" data-destination="Riga">Ricerca miglior prezzo...</div>

        </div>

        <img data-destination-number="5" data-destination="Riga"/>

        

        </div>


    </section>

    <footer>
        <!--Flex Container FOOTER inizio-->

        <div>
            Andrea Azzaro O46001884
        </div>
    </footer>
    <!--Flex Container FOOTER fine-->




</body>


</html>