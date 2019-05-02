<!-- CONTENU -->
<section class="bg-light">		
    <div class="row paddingtop">
        <div class="col-md-12"><h1 class="text-center">Les visites</h1></div>
    </div>
		
	<!-- 1 BALADE -->				
    <div class="row">
        <div class="col-lg-6 col-md-12"><img class="img-fluid" src="<?= $path['img']?>port-vannes.jpg" alt="port de Vannes"></div>
        <div class="col-lg-6 col-md-12">
            <h2 class="font-weight-bold">Visite du port</h2>	
            <p>Indispensable quand on découvre Vannes, le port et ses quelques bateaux et voiliers est un lieu paisible, surtout si l’on s’éloigne un peu de la circulation automobile. La rive droite avec l’office du tourisme, son lieu d’exposition et le skate park sont agréables et connus, mais la rive gauche vaut aussi la balade, avec la grande terrasse en haut de la capitainerie.</p>
            <address class="border-left border-info">
                <p><span class="font-weight-bold">Adresse</span>
                <br>Quai Bernard Moitessier - 56000 Vannes</p>
            </address>
            <!-- BOUTONS -->
            <a class="btn btn-info" href="<?= $link['avis'].'/port';?>"><i class="fas fa-comments"></i> Voir les avis</a>
            <a class="btn btn-outline-secondary <?php if(!isset($_SESSION['pseudo'])) echo 'disabled'; ?>" href="<?= $link['depot-avis'];?>"><i class="fas fa-comment-dots"></i> Laissez votre avis&nbsp;!</a>
        </div>
    </div>	
		
		
	<!-- 1 BALADE -->				
    <div class="row paddingtop30px">
        <div class="col-lg-6 col-md-12"><img class="img-fluid" src="<?= $path['img']?>aquarium-vannes.jpg" alt="aquarium de Vannes"></div>
        <div class="col-lg-6 col-md-12">
            <h2 class="font-weight-bold">Aquarium de Vannes</h2>	
            <p>Parcourez le monde entier à la découverte de notre belle biodiversité marine&nbsp;! La visite de l'aquarium vous conduit des eaux du Golfe du Morbihan et de l'Atlantique aux lagons du Pacifique, en passant par l'Amazone et les grands lacs africains...</p>
            <address class="border-left border-info">
                <p><span class="font-weight-bold">Adresse</span>
                <br>21, Rue Daniel Gilard - 56000 Vannes
                <br><a href="http://aquariumdevannes.fr/" target="_blank">www.aquariumdevannes.fr</a></p>
            </address>
            <!-- BOUTONS -->
            <a class="btn btn-info" href="<?= $link['avis'].'/aquarium';?>"><i class="fas fa-comments"></i> Voir les avis</a>
            <a class="btn btn-outline-secondary <?php if(!isset($_SESSION['pseudo'])) echo 'disabled'; ?>" href="<?= $link['depot-avis'];?>"><i class="fas fa-comment-dots"></i> Laissez votre avis&nbsp;!</a>
        </div>
    </div>	
		
    <!-- 1 BALADE -->				
    <div class="row paddingtop30px">
        <div class="col-lg-6 col-md-12"><img class="img-fluid" src="<?= $path['img']?>la-cohue-musee.jpg" alt="Musée La Cohue"></div>
        <div class="col-lg-6 col-md-12">
            <h2 class="font-weight-bold">La Cohue, Musée des Beaux-Arts</h2>	
            <p>Les œuvres réunies dans la salle haute du musée de la Cohue, parlent des paysages connus et aimés de Geneviève Asse. Les titres Rhuys, Au fil des jours, Cahier océanique, disent la réalité vibrante qui traverse sa peinture depuis un peu plus d’un demi-siècle.</p>
            <address class="border-left border-info">
                <p><span class="font-weight-bold">Adresse</span>
                <br>Place Saint-Pierre - 56000 Vannes</p>
            </address>
            <!-- BOUTONS -->
            <a class="btn btn-info" href="<?= $link['avis'].'/musee';?>"><i class="fas fa-comments"></i> Voir les avis</a>
            <a class="btn btn-outline-secondary <?php if(!isset($_SESSION['pseudo'])) echo 'disabled'; ?>" href="<?= $link['depot-avis'];?>"><i class="fas fa-comment-dots"></i> Laissez votre avis&nbsp;!</a>
        </div>
    </div>	
		
    <!-- 1 BALADE -->				
    <div class="row paddingtop30px">
        <div class="col-lg-6 col-md-12"><img class="img-fluid" src="<?= $path['img']?>decouvrir-golfe.jpg" alt="balade en bateau"></div>
        <div class="col-lg-6 col-md-12">
            <h2 class="font-weight-bold">Compagnie du Golfe – Bateau</h2>	
            <p>Compagnie spécialiste des croisières saisonnières sur le Golfe et vers les îles au large du Morbihan. Large choix de prestations adaptées à toutes vos envies&nbsp;: Île d’Arz, Île-aux-Moines, Belle-Île-en-Mer, Houat...</p>
            <address class="border-left border-info">
                <p><span class="font-weight-bold">Adresse</span>
                <br>7 Allée Loïc Caradec - 56000 Vannes
                <br><a href="https://www.compagnie-du-golfe.fr/" target="_blank">www.compagnie-du-golfe.fr</a></p>
            </address>
            <!-- BOUTONS -->
            <a class="btn btn-info" href="<?= $link['avis'].'/bateau';?>"><i class="fas fa-comments"></i> Voir les avis</a>
            <a class="btn btn-outline-secondary <?php if(!isset($_SESSION['pseudo'])) echo 'disabled'; ?>" href=<?= $link['depot-avis'];?>><i class="fas fa-comment-dots"></i> Laissez votre avis&nbsp;!</a>
        </div>
    </div>	
</section>	