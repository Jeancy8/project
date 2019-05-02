<!-- CONTENU -->
<section class="bg-light">
    <div class="row">
        <div class="col-md-12"><h1 class="text-center">Laissez votre avis !</h1></div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->
            <form action="" method="post" accept-charset="UTF-8" autocomplete="off" class="form-horizontal" id="formavis">
                <fieldset>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="selectbasic">Quelle visite avez-vous fait ?</label>
                        <div class="col-md-12">
                            <select id="selectbasic" name="selectVisite" class="form-control" required="">
                                <option value="port">Visite du port</option>
                                <option value="aquarium">Aquarium de Vannes</option>
                                <option value="musee">La Cohue, Musée des Beaux-Arts</option>
                                <option value="bateau">Balade en bateau</option>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="visiteavis">Titre de votre avis</label>
                        <div class="col-md-12">
                            <input class="form-control" name="selectVisiteTitre" type="text" required="">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="visiteavis">Votre avis</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="contact-mess" name="contact-mess" required="" maxlength="300" required=""></textarea>
                            <span class="help-block">300 caractères maximum</span>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="validavis"></label>
                        <div class="col-md-8">
                            <button id="validavis" name="validAvis" class="btn btn-success"><i class="fas fa-check"></i> Je poste !</button>
                            <a class="btn btn-danger" href="<?= $link['visite'];?>"><i class="fas fa-times-circle"></i> Annuler</a>
                        </div>
                    </div>

                </fieldset>
            </form>
            <!-- *****************************FIN DU FORMULAIRE******************************* -->
        </div>
    </div>
</section>