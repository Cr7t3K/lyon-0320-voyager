<?php include('_include/_header.php');
include('_include/_navbar.php') ?>

<!--                          Banner                           -->
<div class="banner">
    <span class="banner-title">Catalogue</span>
    <span class="banner-baseline">Dans le catalogue, retrouvez les tarifs et toutes les destinations !</span>
    <div class="overlay"></div>
    <img src="./images/banner.jpg" alt="nebula">
    <div class="container-btn container-btn-banner">
        <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver
        </button>
    </div>
</div>


<!--                          Carte                           -->
<main class="main-catalogue">
    <a href="mars.php" class="lien-card">
        <div class="card catalog activ">

            <img src="./images/planetes/mars/mars.jpg" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Mars</h5>
                <p class="card-text">Mars est une planète tellurique, comme le sont Mercure, Vénus et la Terre, environ
                    dix fois moins massive que la Terre mais dix fois plus massive que la Lune.</p>
                <div class="container-btn">
                    <p class="price">3M€</p>
                    <button class="btn" type="submit"><i class="fas fa-credit-card"></i>
                        <p class="text-btn" data-toggle="modal" data-target="#exampleModal">Réserver</p></button>
                </div>
            </div>
        </div>
    </a>

    <a href="coruscant.php" class="lien-card">
        <div class="card catalog activ">

            <img src="images/planetes/coruscant/Coruscant.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Coruscant</h5>
                <p class="card-text">
                    Coruscant est une planète qui fait partie des mondes du noyau. Capitale de la République puis de
                    l'Empire, siège du gouvernement et foyer des Jedi, Coruscant est la plus importante des planètes de
                    la Galaxie.
                </p>
                <div class="container-btn">
                    <p class="price">20M€</p>
                    <button class="btn" type="submit"><i class="fas fa-credit-card"></i>
                        <p class="text-btn" data-toggle="modal" data-target="#exampleModal">Réserver</p></button>
                </div>
            </div>
        </div>
    </a>

    <a href="arrakis.php" class="lien-card">
        <div class="card catalog activ">
            <img src="images/planetes/arrakis/arrakis_planete.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Arrakis</h5>
                <p class="card-text">
                    Également appelée Dune, c'est une planète-désert entièrement couverte de sable et de roches,
                    parcourue par les immenses Vers des sables.
                </p>
                <div class="container-btn">
                    <p class="price">25M€</p>
                    <button class="btn" type="submit"><i class="fas fa-credit-card"></i>
                        <p class="text-btn" data-toggle="modal" data-target="#exampleModal">Réserver</p></button>
                </div>
            </div>
        </div>
    </a>
    <div class="card catalog">

        <div class="overlay destruct">Bientôt disponible</div>
        <img src="images/planetes/Pandora.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pandora</h5>
            <p class="card-text">
                Pandora est une exolune de l'univers Avatar. Il s'agit de l'un des satellites de la géante
                gazeuse Polyphème qui orbite autour d'Alpha Centauri A.
            </p>
            <div class="container-btn">
                <p class="price">25M€</p>
                <button class="btn" type="submit"><i class="fas fa-credit-card"></i>
                    <p class="text-btn" data-toggle="modal" data-target="#exampleModal">Réserver</p></button>
            </div>
        </div>
    </div>
    <div class="card catalog">

        <div class="overlay destruct">En Rénovation</div>
        <img src="images/planetes/etoile_noire.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Etoile Noir</h5>
            <p class="card-text">

            </p>
            <div class="container-btn">
                <p class="price">30M€</p>
                <button class="btn" type="submit"><i class="fas fa-credit-card"></i>
                    <p class="text-btn" data-toggle="modal" data-target="#exampleModal">Réserver</p></button>
            </div>
        </div>
    </div>
    <div class="card catalog">

        <div class="overlay destruct">En Rénovation</div>
        <img src="images/planetes/Krypton.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Krypton</h5>
            <p class="card-text">
            </p>
            <div class="container-btn">
                <p class="price">35M€</p>
                <button class="btn" type="submit"><i class="fas fa-credit-card"></i>
                    <p class="text-btn" data-toggle="modal" data-target="#exampleModal">Réserver</p></button>
            </div>
        </div>
    </div>
</main>


<?php include('_include/_footer.php') ?>
