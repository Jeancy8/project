<!-- CONTENU -->
<section class="bg-light">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Contact</h1>
        </div>
    </div>
    <!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1">

            <form action="" method="post" accept-charset="UTF-8" autocomplete="off" class="form-horizontal">
                <fieldset>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="radios">Qui êtes-vous ?</label>
                        <div class="col-md-12">
                            <label class="radio-inline" for="radios-0">
                                <input type="radio" name="radioWho" id="radios-0" value="contact-hab" checked="checked">
                                Habitant
                            </label>
                            <label class="radio-inline" for="radios-1">
                                <input type="radio" name="radioWho" id="radios-1" value="contact-tour">
                                Touriste
                            </label>
                            <label class="radio-inline" for="radios-2">
                                <input type="radio" name="radioWho" id="radios-2" value="contact-autr">
                                Autre
                            </label>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="nom">Nom</label>
                        <div class="col-md-12">
                            <input id="nom" name="nom" type="text" placeholder="Votre nom" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="prenom">Prénom</label>
                        <div class="col-md-12">
                            <input id="prenom" name="prenom" type="text" placeholder="Votre prénom" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="contact-mail">Mail</label>
                        <div class="col-md-12">
                            <input id="contact-mail" name="contact-mail" type="text" placeholder="Votre email" class="form-control input-md" required=""
                                   value="<?php echo (isset($_SESSION['pseudo']))?$myProfil->getEmail(): ''?>">

                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="radios">Concernant :</label>
                        <div class="col-md-12">
                            <label class="radio-inline" for="radios-3">
                                <input type="radio" name="radioSubject" id="radios-3" value="contact-visite" checked="checked">
                                Visites
                            </label>
                            <label class="radio-inline" for="radios-4">
                                <input type="radio" name="radioSubject" id="radios-4" value="contact-restau">
                                Restaurants
                            </label>
                            <label class="radio-inline" for="radios-5">
                                <input type="radio" name="radioSubject" id="radios-5" value="contact-autre">
                                Autres
                            </label>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="contact-mess">Votre message</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="contact-mess" name="contact-mess" placeholder="Votre message"></textarea>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contact-envoi"></label>
                        <div class="col-md-8">
                            <button id="contact-envoi" name="contact-envoi" class="btn btn-success"><i class="fas fa-paper-plane"></i> Envoi</button>
                            <a class="btn btn-danger" href="<?= $link['accueil'];?>"><i class="fas fa-times-circle"></i> Annuler</a>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>

    </div>
</section>