
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
                <form action="/succes.php" method="GET">
                    <div class="row">
                        <div class="col">
                            <label for="fisrt_name" class="col-form-label">Nom :</label>
                            <input type="text" class="form-control" id="fisrt_name" name="fisrt_name" placeholder="Nom">
                        </div>
                        <div class="col">
                            <label for="last_name" class="col-form-label">Prénom :</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email :</label>
                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="recipient_number" class="col-form-label">Nombre de personnes :</label>
                        <input type="number" class="form-control" name="recipient_number" id="recipient_number">
                    </div>
                    <div class="form-group">
                        <label for="destination" class="col-form-label">Destination :</label>
                        <select class="form-control" name="destination" id="destination">
                            <option>Sélectionner votre destination</option>
                            <option>Mars</option>
                            <option>Coruscant</option>
                            <option>Arrakis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date de départ :</label>
                        <select class="form-control" name="date" id="date">
                            <option>Séléctionner votre date de départ</option>
                            <option>16 Avril 2020</option>
                            <option>16 Mai 2020</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message :</label>
                        <textarea class="form-control" name="message_text" id="message-text"></textarea>
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

<?php
var_dump($_POST);
?>

<script src="../script/app.js"></script>
<script src="../script/faq.js"></script>
