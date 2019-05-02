<div class="container">
<header>
	<div class="row">
		<div class="col-md-2"><a href="accueil"><img class="img-fluid" src="<?= $path['img'];?>logo-vannes.png" alt="logo de vannes"></a></div>
        <div class="col-md-2 offset-md-8">
            <div class="btn-group float-right">
                <a class="btn rounded-circle rs" href="#"><i class="fab fa-facebook-f fab-rs"></i></a>
                <a class="btn rounded-circle rs" href="#"><i class="fab fa-twitter fab-rs"></i></a>
                <a class="btn rounded-circle rs" href="#"><i class="fab fa-instagram fab-rs"></i></a>
                <a class="btn rounded-circle rs" href="#"><i class="fab fa-pinterest-p fab-rs"></i></a>	
            </div>
        </div>
	</div>
			
			<!-- NAVIGATION -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark nav-justified" style="margin-top: 25px;">
            <!-- BOUTON RESPONSIVE -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-lg-12">	
                    <!-- MENU -->	
                <a class="navbar-brand" href="<?= $link['accueil'];?>"><i class="fas fa-home"></i></a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?= $link['visite'];?>">Visites</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $link['restaurant'];?>">Restaurants</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $link['meteo'];?>">Météo</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $link['contact'];?>">Contact</a></li> 
                    <?php if(isset($_SESSION['pseudo']) AND $myProfil->getRole() == $role['admin']) :?>
                    <li class="nav-item" id="adm"><a class="nav-link" href=<?= $link['administrateur']; ?>><i class="fas fa-user-cog"></i> Administrateur</a></li>
                    <?php endif ?>
                    <?php if(isset($_SESSION['pseudo'])) :?>
                        <li class="nav-item"><a class="nav-link" href="<?= $link['deconnexion'];?>"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                    <?php else : ?>
                        <li class="nav-item" id="connexion"><a class="nav-link" href="<?= $link['connexion'];?>"><i class="fas fa-user"></i> Connexion</a></li>
                    <?php endif ?>
                </ul>
                <!-- FIN DU MENU -->
            </div>
        </div>		
        
    </nav>
</header>