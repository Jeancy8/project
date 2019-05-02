<!-- CONTENU -->
<section class="bg-light">		
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Connexion à votre compte</h1>
        </div>
    </div>	
        <!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->
    <div class="row">	
        <div class="col-md-4 offset-md-4">	
            <form action="" method="post" accept-charset="UTF-8" autocomplete="off" class="form-horizontal" id="formconnexion">
            <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="pseudo">Pseudo ou email</label>  
                <div class="col-md-12">
                <input id="pseudo" name="identifiant" type="text" placeholder="pseudo ou e-mail" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="password">Mot de passe</label>
                <div class="col-md-12">
                <input id="password" name="password" type="password" placeholder="mot de passe" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-12">
                <button id="btnconnexion" name="login" class="btn btn-success"><i class="fas fa-user"></i> Connexion</button>
                </div>
            </div>
            <p>Pas encore de compte&nbsp;?<a href="<?= $link['inscription']?>"> Inscrivez-vous ici&nbsp;!</a></p>
            </fieldset>
            </form>
        </div>
    </div>		
</section>