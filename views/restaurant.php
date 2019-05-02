<!-- CONTENU -->
<section class="bg-light">		
    <div class="row paddingtop">
        <div class="col-md-12"><h1 class="text-center">Les restaurants</h1></div>
    </div>

    <!-- 1 RESTO -->				
    <div class="row">
        <div class="col-lg-6 col-md-12"><img class="img-fluid" src="<?= $path['img'];?>la-tete-en-l-air.jpg" alt="Restaurant La Tête en l'Air"></div>
        <div class="col-lg-6 col-md-12">
            <h2 class="font-weight-bold d-inline-block align-middle">La Tête en l'Air</h2>
            <img class="img-fluid note" src="<?= $path['img'].'resto-'.$noteManager->getNote('Tête').'.png';?>" alt="note du restaurant">
            <p>A La Tête en l'Air, rien n'est écrit, nous vous proposons un MENU DEGUSTATION A L'AVEUGLE, décliné en 7, 5 ou 3 assiettes surprise, renouvelé toutes les trois semaines et composé avec les meilleurs produits de saison, 100% 'Fait Maison'...</p>
            <address class="border-left border-info">
                <p><span class="font-weight-bold">Adresse</span>
                <br>43, rue de la Fontaine - 56000 Vannes
                <br><a href="https://www.lateteenlair-vannes.fr/" target="_blank">www.lateteenlair-vannes.fr</a></p>
            </address>
            <!-- BOUTONS -->
            <a class="btn btn-outline-secondary <?php if(!isset($_SESSION['pseudo'])) echo 'disabled'; ?>" href="<?= $link['noter-resto']; ?>"><i class="fas fa-concierge-bell"></i> Notez cet établisssement&nbsp;!</a>
        </div>
    </div>	

    <!-- 1 RESTO -->				
    <div class="row paddingtop30px">
        <div class="col-lg-6 col-md-12"><img class="img-fluid" src="<?= $path['img'];?>Sainte-Anne-restaurant.jpg" alt="Restaurant Sainte-Anne"></div>
        <div class="col-lg-6 col-md-12">
            <h2 class="font-weight-bold d-inline-block align-middle">À l’Image Sainte-Anne</h2>
            <img class="img-fluid note" src="<?= $path['img'].'resto-'.$noteManager->getNote('Sainte').'.png';?>" alt="note du restaurant">
            <p>Notre restaurant A l’Image Sainte-Anne, table renommée depuis 1948 dans le pays de Vannes et labellisée Maître Restaurateur, vous propose une cuisine traditionnelle et créative au large accent breton.</p>
            <address class="border-left border-info">
                <p><span class="font-weight-bold">Adresse</span>
                <br>8 place de la libération - 56000 Vannes
                <br><a href="https://www.kyriad-vannes.fr/restaurant-vannes.html" target="_blank">www.kyriad-vannes.fr/restaurant-vanne</a></p>
            </address>
            <!-- BOUTONS -->
            <a class="btn btn-outline-secondary <?php if(!isset($_SESSION['pseudo'])) echo 'disabled'; ?>" href="<?= $link['noter-resto']; ?>"><i class="fas fa-concierge-bell"></i> Notez cet établisssement&nbsp;!</a>
        </div>
    </div>	

    <!-- 1 RESTO -->				
    <div class="row paddingtop30px">
        <div class="col-lg-6 col-md-12"><img class="img-fluid" src="<?= $path['img'];?>Annexe-restaurant.jpg" alt="Restaurant L'Annexe"></div>
        <div class="col-lg-6 col-md-12">
            <h2 class="font-weight-bold d-inline-block align-middle">L'Annexe</h2>
            <img class="img-fluid note" src="<?= $path['img'].'resto-'.$noteManager->getNote('Annexe').'.png';?>" alt="note du restaurant">
            <p>Élise Rollet et David Kiburse, deux jeunes professionnels pleins d'allant, tiennent les rênes de cette maison conviviale. Aux fourneaux, le chef met l’accent sur les produits frais et locaux : le nom des producteurs est fièrement affiché au menu de L’Annexe.</p>
            <address class="border-left border-info">
                <p><span class="font-weight-bold">Adresse</span>
                <br>18 rue Emile Burgault - 56000 Vannes
                <br><a href="https://restaurantlannexe.eatbu.com/" target="_blank">www.restaurantlannexe.eatbu.com</a></p>
            </address>
            <!-- BOUTONS -->
            <a class="btn btn-outline-secondary <?php if(!isset($_SESSION['pseudo'])) echo 'disabled'; ?>" href="<?= $link['noter-resto']; ?>"><i class="fas fa-concierge-bell"></i> Notez cet établisssement&nbsp;!</a>
        </div>
    </div>					

    <!-- 1 RESTO -->				
    <div class="row paddingtop30px">
        <div class="col-lg-6 col-md-12"><img class="img-fluid" src="<?= $path['img'];?>Gourmandiere-restaurant.jpg" alt="Restaurant La Gourmandière"></div>
        <div class="col-lg-6 col-md-12">
            <h2 class="font-weight-bold d-inline-block align-middle">La Gourmandière</h2>
            <img class="img-fluid note" src="<?= $path['img'].'resto-'.$noteManager->getNote('Gourmandiere').'.png';?>" alt="note du restaurant">
            <p>Après un parcours multi étoilés, Olivier Samson fait non seulement une cuisine au goût du jour, mais une cuisine personnelle, qui lui ressemble avec une palette gaie et colorée, des tons vifs; il n’aime rien tant que l’acide, un peu l’amer, beaucoup la mer…</p>
            <address class="border-left border-info">
                <p><span class="font-weight-bold">Adresse</span>
                <br>18 rue Emile Burgault - 56000 Vannes
                <br><a href="http://www.la-gourmandiere.fr/" target="_blank">www.la-gourmandiere.fr</a></p>
            </address>
            <!-- BOUTONS -->
            <a class="btn btn-outline-secondary <?php if(!isset($_SESSION['pseudo'])) echo 'disabled'; ?>" href="<?= $link['noter-resto']; ?>"><i class="fas fa-concierge-bell"></i> Notez cet établisssement&nbsp;!</a>
        </div>
    </div>				
</section>