<?php include('_include/_header.php');
include('_include/_navbar.php');

$cardHome = [
    'mars' => ["mars.php", "./images/planetes/mars/mars.jpg", "Mars", "3M€/pers *"],
    'coruscant' => ['coruscant.php', './images/planetes/coruscant/Coruscant.jpg', 'Coruscant', '20M€/pers *'],
    'arakis' => ['arrakis.php', './images/planetes/arrakis/arrakis_planete.jpg', 'Arrakis', '25M€/pers *']
];

$trustCompany = [
    'spacex' => ['./images/spacex.png'],
    'nasa' => ['./images/nasa.png'],
    'amazon' => ['./images/amazon.png']
];



?>


<!--                    Home Page                       -->

<div class="banner-large">
    <h1 class="banner-title">Déjeunez sur <span id="changeText">Mars</span></h1>
    <span class="banner-baseline">L'immensité de l'espace à votre portée !</span>
    <div class="overlay"></div>
    <img src="./images/home2.jpg" alt="mars expedition">
    <div class="container-btn container-btn-banner">
        <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver
        </button>
    </div>
</div>

<main class="container">

    <h2 class="title-home">Bienvenue chez Voyager !</h2>
    <p class="text-home">Voyager vous permet de réaliser votre rêve d'explorer l'espace et les spots les plus mythiques
        de la galaxie ou d'ailleurs !</p>

    <div class="container">
        <h3>Nos Meilleurs voyages</h3>
        <div class="home-cards">
            <?php
            foreach ($cardHome as $planet => $content){

                echo
                "<a href=\"$content[0]\" class=\"\">
                <div class=\"card bg-dark text-white hover-card\">
                    <img src=\"$content[1]\" class=\"card-img\" alt=\"Mars\">
                    <div class=\"card-img-overlay\">
                        <h5 class=\"card-title-home\">Visiter $content[2]</h5>
                        <p class=\"card-text-home\">$content[3]</p>
                    </div>
                </div>
             </a>";
            };
            ?>
        </div>
    </div>


    <?php
    echo "
    <h3>Ils nous font confiance</h3>
        <div class=\"brands\">";

            foreach ($trustCompany as $company => $logo){

            echo "<img src=\"$logo[0]\" alt=\"$company\">";
            };
        echo "
        </div>";
        ?>

</main>


<?php include('_include/_footer.php');
;?>
