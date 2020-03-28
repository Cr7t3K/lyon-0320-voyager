<?php
include('_include/_header.php');
include('_include/_navbar.php');

$planetImg = [
    'mars' => "/images/planetes/mars/mars.jpg",
    'coruscant' => "/images/planetes/coruscant/Coruscant.jpg",
    'arrakis' => "/images/planetes/arrakis/arrakis_planete.jpg"
];

$destination = $_GET['planet'];
$name = $_GET['firstname']. " " . $_GET['lastname'];
$messageText = $_GET['text'];
$depart = $_GET['date'];
$nombre = $_GET['number'];
$email = $_GET['mail'];
$sex = $_GET["genre"];


switch ($destination){
    case 'Mars':
        $imgHeader = $planetImg['mars'];
        $cost = 3*$nombre;
        break;
    case 'Arrakis':
        $imgHeader = $planetImg['arrakis'];
        $cost = 25*$nombre;
        break;
    case 'Coruscant':
        $imgHeader = $planetImg['coruscant'];
        $cost = 20*$nombre;
        break;
    default:
        $imgHeader = $planetImg['mars'];

}

if ($sex === "M"){
    $title = "Mr ". $_GET['lastname'].",";
} else {
    $title = "Mme ". $_GET['lastname'].",";
}


?>


<div class="card purchase" style="width: 90%;">
    <img class="card-img-top" src="<?= $imgHeader; ?>" alt="Destination choisie">
    <div class="check"><i class="fas fa-check"></i></div>
    <div class="card-body">
        <h1 class="card-title card-title-purchase">Ticket de réservation</h1>
        <p class="card-text card-text-purchase">
            <span style="font-size: 33px; font-weight: 600; line-height: 500%;"><?= $title; ?></span> <br>
            Nous vous remercions d'avoir choisit Voyager pour votre voyage a destination de  <?= $destination; ?> <br>
            Nous vous rappelons que vous pouvez consulter notre catalogue pour découvrir toutes les activités proposées sur <?= $destination; ?> <br>

            Nous prions tout nos cliens de ce presenter a l'enregistrement muni de votre carte d'embarquement ainsi que tous vos papiers d'identité valide. <br>
            <span style="margin-top: 50px; display: flex;">Vous trouverez ci-dessous le récapitulatif de votre réservation, ainsi que toutes les informations concernant le depart.</span>
        </p>
        <div class="container-info">
            <div class="info"><h4>Nom:</h4><p><?= $name; ?></p></div>
            <div class="info"><h4>Destination:</h4><p><?= $destination; ?></p></div>
            <div class="info"><h4>Date:</h4><p><?= $depart; ?></p></div>
            <div class="info"><h4>Nombre:</h4><p><?= $nombre; ?></p></div>
            <div class="info"><h4>Prix:</h4><p><?= $cost." M€"; ?></p></div>
        </div>
    </div>
</div>















<?php
include('_include/_footer.php');
;?>

