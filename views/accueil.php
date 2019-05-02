<!-- CONTENU 1ERE LIGNE -->
<div class="row position-relative">
		
		<!-- TITRE -->
		<div class="col-md-5 offset-md-6 col-sm-12 position-absolute" id="titre-accueil">
			<h1 class="text-right">Bienvenue<br>à Vannes&nbsp;!</h1>
		</div>
		
		<!-- CARROUSSEL -->
		<div class="col-md-12">
			  <!-- IMAGES -->
				 <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="<?= $path['img']?>jardin.jpg" class="d-block w-100 img-fluid" alt="jardins">
						</div>
						<div class="carousel-item">
						  <img src="<?= $path['img']?>rue.jpg" class="d-block w-100 img-fluid" alt="rue">
						</div>
						 <div class="carousel-item">
						  <img src="<?= $path['img']?>chateau.jpg" class="d-block w-100 img-fluid" alt="chateau">
						</div>
						<div class="carousel-item">
						  <img src="<?= $path['img']?>bateau.jpg" class="d-block w-100 img-fluid" alt="bateaux">
						</div>  
					  </div>
				  </div>
			  <!-- BOUTONS -->	  
				  <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
			</div>
	<!-- FIN DU CARROUSSEL -->
	</div>
		
<!-- CONTENU 2EME LIGNE -->
	<div class="col-md-12"  style="margin-top: 20px;">	
		<section class="row bg-dark">
		  <h2 style="color:#fff; margin-top: 10px;">La Bretagne se visite aussi en gastronomie&nbsp;!</h2>
			<!-- GALERIE -->
			<div class="row text-center galerie">
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="<?= $path['img']?>gateau.jpg" alt="Gateau"></div>
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="<?= $path['img']?>cidre-3.jpg" alt="Cidre"></div>
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="<?= $path['img']?>far-2.jpg" alt="Far"></div>  
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="<?= $path['img']?>kouign-amann-2.jpg" alt="Kouign-amann"></div>
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="<?= $path['img']?>crepe-2.jpg" alt="Crepe"></div>	  
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="<?= $path['img']?>caramel.jpg" alt="Caramel"></div>		  
			</div>
		</section>
	</div>	
<!-- FIN DE LA GALERIE -->

<!-- LES SECTIONS -->	
	<div class="col-md-12">	
		<section class="row bg-light" style="margin-top: 20px;">
			<h2 style="margin-top: 10px;">Retrouvez tous nos bons plans&nbsp;!</h2>
		</section>
			
		<section class="row bg-light">	
			<div class="col-md-4" style="background-color: #5fbda3;">
				<a href="<?= $link['visite'];?>" class="lienaccueil">
					<h4 class="text-center margintop5px"><i class="fas fa-camera-retro"></i> Les visites</h4>
					<img class="img-fluid" src="<?= $path['img']?>visite.jpg" alt="visites à Vannes">
					<p class="text-justify">Vannes est une ville fortifiée située dans la région Bretagne. Sa vieille ville se caractérise par d'étroites rues pavées et des portes médiévales. Au centre, la cathédrale Saint-Pierre de Vannes allie les styles roman et gothique, tandis que la place des Lices est bordée de maisons à colombages colorées. Au sud, le port est doté de restaurants et de bateaux qui proposent des croisières dans le golfe du Morbihan.</p>
				</a>	
			</div>
			<div class="col-md-4" style="background-color: #c4ac52;">
				<a href="<?= $link['restaurant'];?>" class="lienaccueil">
					<h4 class="text-center margintop5px"><i class="fas fa-utensils"></i> Les restaurants</h4>
					<img class="img-fluid" src="<?= $path['img']?>restaurant.jpg" alt="restaurant à Vannes">
					<p class="text-justify">Profitez de l’ambiance décontractée de Vannes en vous installant dans un restaurant du port ou en gagnant les remparts. Les fruits de mer sont à l’honneur dans les meilleurs restaurants de Vannes et propices à une cuisine gastronomique dans les restaurants étoilés. A Vannes, on mange aussi japonais, indien ou chinois, pour réveiller son palais par des notes exotiques !</p>
				</a>	
			</div>	
			<div class="col-md-4" style="background-color: #b86787;">
				<a href="<?= $link['meteo'];?>" class="lienaccueil">
					<h4 class="text-center margintop5px"><i class="fas fa-cloud-sun"></i> La météo</h4>
					<img class="img-fluid" src="<?= $path['img']?>meteo.jpg" alt="météo à Vannes">
					<p class="text-justify">Quel temps fait-il aujourd'hui et cet après-midi à Vannes ? Retrouvez les prévisions météo du jour, gratuites et détaillées pour la ville de Vannes 56000</p>
					
				</a>	
			</div>				
		</section>
	</div>	
<!-- FIN DES SECTIONS -->