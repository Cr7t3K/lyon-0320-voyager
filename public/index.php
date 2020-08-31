<?php
require_once '_include/_header.php';
require_once '_include/_navbar.php';
require_once './connec.php';

$trustCompany = [
    'spacex' => ['./images/spacex.png'],
    'nasa' => ['./images/nasa.png'],
    'amazon' => ['./images/amazon.png']
];



$pdo = new PDO(DSN, USER, PASS);
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$selectPlanet = "SELECT * FROM planet WHERE top=1";
$query = $pdo->prepare($selectPlanet);
$query->execute();

$cardHome = $query->fetchAll(PDO::FETCH_OBJ);

//if (!$cardHome){
//    http_response_code(404);
//    include_once '404.html';
//    exit();
//}
?>

<!--                    Home Page                       -->

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
        <?php foreach ($cardHome as $key): ?>
            <a href="<?= $key->link ?>" class="">
                <div class="card bg-dark text-white hover-card">
                    <img src="<?= $key->img ?>" class="card-img" alt="Mars">
                    <div class="card-img-overlay">
                        <h5 class="card-title-home">Visiter <?= $key->title ?></h5>
                        <p class="card-text-home"><?= $key->price ?> M€/pers*</p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
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
