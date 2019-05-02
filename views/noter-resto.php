<!-- CONTENU -->
<section class="bg-light">
    <div class="row">
        <div class="col-md-12"><h1 class="text-center">Notez un restaurant !</h1></div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->
            <form action="" method="post" accept-charset="UTF-8" autocomplete="off" class="form-horizontal" id="formnote">
                <fieldset>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="selectbasic">Restaurant testé</label>
                        <div class="col-md-12">
                            <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="Tête">La Tête en l'Air</option>
                                <option value="Sainte">À l’Image Sainte-Anne</option>
                                <option value="Annexe">L'Annexe</option>
                                <option value="Gourmandière">La Gourmandière</option>
                            </select>
                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="radios">Quelle note donneriez-vous ?</label>
                        <div class="col-md-12">
                            <label class="radio-inline" for="radios-0">
                                <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                1
                            </label>
                            <label class="radio-inline" for="radios-1">
                                <input type="radio" name="radios" id="radios-1" value="2">
                                2
                            </label>
                            <label class="radio-inline" for="radios-2">
                                <input type="radio" name="radios" id="radios-2" value="3">
                                3
                            </label>
                            <label class="radio-inline" for="radios-3">
                                <input type="radio" name="radios" id="radios-3" value="4">
                                4
                            </label>
                            <label class="radio-inline" for="radios-4">
                                <input type="radio" name="radios" id="radios-4" value="5">
                                5
                            </label>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="validnote"></label>
                        <div class="col-md-8">
                            <button id="validnote" name="validnote" class="btn btn-success"><i class="fas fa-check"></i> Je note !</button>
                            <a class="btn btn-danger" href="<?= $link['restaurant']; ?>"><i class="fas fa-times-circle"></i> Annuler</a>
                        </div>
                    </div>

                </fieldset>
            </form>
            <!-- *****************************FIN DU FORMULAIRE******************************* -->
        </div>
    </div>
</section>