<?php
// Verif form input
$error = [];
$lastName = $firstName = $email = $numberRec = $dest = $depart = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["last_name"])) {
        $error['lastname'] = "Ce champ est requis";
    }else{
        $lastName = $_POST['last_name'];
    }
    if (empty($_POST["first_name"])) {
        $error['firstname'] = "Ce champ est requis";
    }else{
        $firstName = $_POST['first_name'];
    }

    if (empty($_POST["user_email"])) {
        $error['email'] = "Ce champ est requis";
    }else{
        $email = $_POST["user_email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "Email invalide";
        }else {
            $email = $_POST['user_email'];
        }
    }

    if (empty($_POST["recipient_number"])) {
        $error['number'] = "Ce champ est requis";
    }else{
        $numberRec = $_POST['recipient_number'];
    }

    if (empty($_POST["destination"])) {
        $error['destination'] = "Ce champ est requis";
    }else{
        $dest = $_POST['destination'];
    }
    if (empty($_POST["date"])) {
        $error['depart'] = "Ce champ est requis";
    }else{
        $depart = $_POST['date'];
    }
    if (empty($_POST["customRadioInline1"])) {
        $error['sex'] = "Ce champ est requis";
    }else{
        $sex = $_POST['customRadioInline1'];
    }


    $message = $_POST['message_text'];

    if (empty($error)){
        header("Location: /purchase.php?firstname=$firstName&lastname=$lastName&mail=$email&number=$numberRec&planet=$dest&date=$depart&text=$message&genre=$sex");
    }

}

?>



<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Réservez votre voyage</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="needs-validation"  novalidate>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" value="M" class="custom-control-input" required>
                            <label class="custom-control-label" for="customRadioInline1">Mr.</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" value="Mme" class="custom-control-input" required>
                            <label class="custom-control-label" for="customRadioInline2">Mme.</label>
                        </div>
                        <?php if (isset($error['sex'])) : ?>
                            <span class="form-text text-error">
                                    <?= $error["sex"]; ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="last_name" class="col-form-label">Nom :</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nom" required>
                            <?php if (isset($error['lastname'])) : ?>
                                <span class="form-text text-error">
                                    <?= $error["lastname"]; ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="col">
                            <label for="fisrt_name" class="col-form-label">Prénom :</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Prénom" required>
                            <?php if (isset($error['firstname'])) : ?>
                                <span class="form-text text-error">
                                    <?= $error["firstname"]; ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email :</label>
                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" required>
                        <?php if (isset($error['email'])) : ?>
                            <span class="form-text text-error">
                                    <?= $error["email"]; ?>
                                </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="recipient_number" class="col-form-label">Nombre de personnes :</label>
                        <input type="number" class="form-control" name="recipient_number" id="recipient_number" value="1" min="1" max="10" required>
                        <?php if (isset($error['number'])) : ?>
                            <span class="form-text text-error">
                                    <?= $error["number"]; ?>
                                </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="destination" class="col-form-label">Destination :</label>
                        <select class="form-control" name="destination" id="destination" required>
                            <option></option>
                            <option>Mars</option>
                            <option>Coruscant</option>
                            <option>Arrakis</option>
                        </select>
                        <?php if (isset($error['destination'])) : ?>
                            <span class="form-text text-error">
                                    <?= $error["destination"]; ?>
                                </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date de départ :</label>
                        <select class="form-control" name="date" id="date" required>
                            <option></option>
                            <option>16 Avril 2020</option>
                            <option>16 Mai 2020</option>
                        </select>
                        <?php if (isset($error['depart'])) : ?>
                            <span class="form-text text-error">
                                    <?= $error["depart"]; ?>
                                </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message :</label>
                        <textarea class="form-control" name="message_text" id="message-text"></textarea>
                    </div>
                    <div class="form-group">
                        <h4>Prix : <span id="price" style="color: #8002d2;">Sélectionner une destination</span></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-modal" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary btn-modal">Réserver</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="../script/app.js"></script>
<script src="../script/faq.js"></script>
<script>
    $(document).ready(function(){
        // Prix dynamique et gestion oublient d'entrer de donnée.
        $( "#recipient_number, #destination" ).change(function() {
            var number = $("#recipient_number").val();
            var planet = $("#destination").val();
            var verif = false;
            switch (planet) {
                case 'Mars':
                    var price = 3;
                    verif = true;
                    break;
                case 'Coruscant':
                    var price = 20;
                    verif = true;
                    break;
                case 'Arrakis':
                    var price = 25;
                    verif = true;
                    break;
                default:
                    verif = false;
            }
            if (verif == true){
                $("#price").text(price*number+" M€");
            } else {
                $("#price").text("Sélectionner une destination");
            }
        });
    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
