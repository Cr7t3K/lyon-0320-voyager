<?php include('_include/_header.php');
include('_include/_navbar.php') ?>

<div class="banner-large">
    <h1 class="banner-title">Déjeunez sur <span id="changeText">Mars</span></h1>
    <span class="banner-baseline">L'immensité de l'espace à votre portée !</span>
    <div class="overlay"></div>
    <img src="images/home2.jpg" alt="mars expedition">
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
            <a href="mars.php" class="">
                <div class="card bg-dark text-white hover-card">
                    <img src="./images/planetes/mars/mars.jpg" class="card-img" alt="Mars">
                    <div class="card-img-overlay">
                        <h5 class="card-title-home">Visiter Mars</h5>
                        <p class="card-text-home">3M€/pers *</p>
                    </div>
                </div>
            </a>
            <a href="coruscant.php" class="">
                <div class="card bg-dark text-white hover-card">
                    <img src="./images/planetes/coruscant/Coruscant.jpg" class="card-img" alt="Coruscant">
                    <div class="card-img-overlay">
                        <h5 class="card-title-home">Visiter Coruscant</h5>
                        <p class="card-text-home">20M€/pers *</p>
                    </div>
                </div>
            </a>
            <a href="arrakis.php" class="">
                <div class="card bg-dark text-white hover-card">
                    <img src="./images/planetes/arrakis/arrakis_planete.jpg" class="card-img" alt="Arrakis">
                    <div class="card-img-overlay">
                        <h5 class="card-title-home">Visiter Arrakis</h5>
                        <p class="card-text-home">25M€/pers *</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <h3>Ils nous font confiance</h3>
    <div class="brands">
        <img src="./images/spacex.png" alt="spacex">
        <img src="./images/nasa.png" alt="nasa">
        <img src="./images/amazon.png" alt="amazon">
    </div>
</main>


<?php include('_include/_footer.php') ?>
