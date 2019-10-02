

	<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 0780720416</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>contact@grossista.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Alger ...</a></li>
					</ul>
					<ul class="header-links pull-right">
                        
                        <li><i class="fa fa-building"></i><a href=" {{ url('inscription') }}"> Crée Hanoutek / s'inscrire</a></li>
						@if(Auth::guest())
                         <li class="dropdown">
					        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="{{ url('connexion') }}">Se connecter</a>
					        <span class="caret"></span></a>
					        <ul class="dropdown-menu" style='background-color:black'>
					          <li><a href="{{ url('boutique/login') }}">boutique</a></li>
					          <li><a href="{{ url('membre/login') }}">Particulier</a></li>
					         
					        </ul>
					      </li>
						@else
							<li><a href=" {{ url('inscription') }} "><i class="fa fa-user-o"></i> Mon compte</a></li>
						@endif
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="{{url('/')}}" class="logo">
									<img src="{{url('./img/logo.png')}}" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form  method='GET' action="{{url('store')}}">
									<div class="dropdown" style='display:inline'>
										  <button class="btn btn-info dropdown-toggle categorie-btn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    Catégorie 
										    <i class="fa fa-list" aria-hidden="true"></i>

										  </button>
										  <ul class="dropdown-menu multi-level" aria-labelledby="dLabel" style='width:470px'>
										    <h4>Vêtements, Textiles et Accessoires de mode</h4>
										    <li class="dropdown-submenu">
										      <a href="#">Vêtements <span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
										        <li><a href="#">•	Femmes vêtements</a></li>
										        <li><a href="#">•	hommes vêtements</a></li>
										        <li><a href="#">•	Vêtement bébé et enfants</a></li>
										        <li><a href="#">•	Vêtement garçons et filles</a></li>
										        <li><a href="#">•	Vêtements maternités</a></li>
										        <li><a href="#">•	Sous vêtement homme et femme</a></li>
										        <li><a href="#">•	Robe marie et Accessoire</a></li>
										        <li><a href="#">•	Vêtement de sport</a></li>
										        <li><a href="#">•	Service de signe de mode</a></li>
										        <li><a href="#">•	Matériel de culture</a></li>
										        <li><a href="#">•	Uniforme</a></li>
										        <li><a href="#">•	Mannequins</a></li>
										        <li><a href="#">•	ملابس تقليدية</a></li>
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Textiles et produit de cuir<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">

										        <li><a href="#">•	Tissus, Fils</a></li>
										        <li><a href="#">•	Cuir</a></li>
										      
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Accessoire de mode<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Chapeaux et casquette, châles</a></li>
										        <li><a href="#">•	Ceinture, cravate, gant et Echarpe</a></li>
										       
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Horlogerie, bijouterie et optique<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Montre, Lunette</a></li>
										        <li><a href="#">•	Bijoux, bijoux kabyle</a></li>
										        
										        
										      </ul>
										    </li>
										    <h4>Alimentation et Agriculture</h4>
										    <li class="dropdown-submenu">
										      <a href="#">Alimentation<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Aliment pour bébé et céréale</a></li>
										        <li><a href="#">•	Café, Boisson</a></li>
										        <li><a href="#">•	Conserve, Pate</a></li>
										        <li><a href="#">•	Farine, Huile</a></li>
										        <li><a href="#">•	Légume, Fruit</a></li>
										        <li><a href="#">•	Viande, Poisson</a></li>
										         <li><a href="#">•	Boulangerie et pâtisserie, chocolat et sucrerie</a></li>
										        
										        
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Elevage et Animaux</a>
										      
										    </li>
												<h4>Telecommunication et Equipement electrique</h4>
										    <li class="dropdown-submenu">
										      <a href="#">Télécommunication<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Téléphone mobile</a></li>
										        <li><a href="#">•	Pièce et Accessoire</a></li>
										       
										       
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Matériel e électrique<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Distribution électrique, Caisse électrique</a></li>
										        <li><a href="#">•	Accessoire de câblage et câble</a></li>
										        <li><a href="#">•	Disjoncteur générateur, Prise, Fusible</a></li>
										        <li><a href="#">•	Batterie et Transformation, Sources</a></li>
										       
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Composant électrique</a>
										      
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Moteur</a>
										      
										    </li>
										    <h4>Beauté et santé</h4>
										    <li class="dropdown-submenu">
										      <a href="#">Beauté <span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Maquillage</a></li>
										        <li><a href="#">•	Parfume et Déodorant</a></li>
										        <li><a href="#">•	Hygiène</a></li>
										        <li><a href="#">•	Soins de la peau et cheveux</a></li>
										        <li><a href="#">•	Produit pour bébé</a></li>
										        <li><a href="#">•	Rasage et épilation </a></li>
										        <li><a href="#">•	Equipement de beauté </a></li>
										        <li><a href="#">•	Equipement de salon de coiffure et Matériel</a></li>
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Sente et médecine<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	اعشاب طبية</a></li>
										        <li><a href="#">•	Logiciel médicaux</a></li>
										        <li><a href="#">•	Equipment médicaux</a></li>
										        <li><a href="#">•	Approvisionnement des analyses et Appareillage</a></li>
										        <li><a href="#">•	Lunette médicale</a></li>
										       
										        
										      </ul>
										    </li>
										    <h4>Sacs, chaussures et Accessoire</h4>
										    <li class="dropdown-submenu">
										      <a href="#">Chaussures et Accessoire<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Chaussures pour femmes</a></li>
										        <li><a href="#">•	Chaussures pour hommes </a></li>
										        <li><a href="#">•	Chaussures pour bébé et enfants</a></li>
										        <li><a href="#">•	Chaussures de sport</a></li>
										        
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Valise et Sacs<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Sacs a main et Bandoulier, Portefeuilles et pochette </a></li>
										        <li><a href="#">•	Sacs a dos, Sacs de sport et loisir</a></li>
										        <li><a href="#">•	Valise, Sacs de voyage</a></li>
										       
										        
										      </ul>
										    </li>
										    <h4>Auto et Transport</h4>
										    <li class="dropdown-submenu">
										      <a href="#">Auto et Transport<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Voiture </a></li>
										        <li><a href="#">•	Camions </a></li>
										        <li><a href="#">•	Auto pièce et Accessoire</a></li>
										        <li><a href="#">•	Bus </a></li>
										        <li><a href="#">•	Moto</a></li>
										        <li><a href="#">•	Vélo</a></li>
										         <li><a href="#">•	Bus et camion pièce </a></li>
										        
										      </ul>
										    </li>
										    <h4>Sport, Décoration et jouet</h4>
										    <li class="dropdown-submenu">
										      <a href="#">Décoration et Artisanat<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Décoration pour fête</a></li>
										        <li><a href="#">•	Décoration pour maison</a></li>
										        <li><a href="#"></a></li>
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Sport et Loisir<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Matériel de sport </a></li>
										        <li><a href="#">•	Accessoire de sport</a></li>
										        <li><a href="#">•	Complément</a></li>
										        <li><a href="#">•	Camping</a></li>
										        
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Jeux et jouets<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Jouet pour bébé</a></li>
										        <li><a href="#">•	Jeux vidéo</a></li>
										        <li><a href="#">•	Jeux d’extérieur et structure</a></li>
										        <li><a href="#">•	Accessoire de jeux</a></li>
										        
										      </ul>
										    </li>
										    <h4>Maison, Lumières et construction</h4>
										    <li class="dropdown-submenu">
										      <a href="#">Maison et Jardin <span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Appartement </a></li>
										        <li><a href="#">•	Villa</a></li>
										        <li><a href="#">•	Terrain</a></li>
										        <li><a href="#">•	Accessoire de maison et décoration</a></li>
										        <li><a href="#">•	Matériel de cuisine et accessoire</a></li>
										        <li><a href="#">•	Jardin </a></li>

										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Bâtiment et construction<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Module préfabriqué (chalet)</a></li>
										        <li><a href="#">•	Cuisine équipe</a></li>
										        <li><a href="#">•	Port et fenêtre et Accessoire</a></li>
										        <li><a href="#">•	مواد البناء</a></li>
										        <li><a href="#">•	Matériaux de finition</a></li>
										        <li><a href="#">•	Pierre et matériaux de carrière</a></li>
										        
										      </ul>
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Meuble</a>
										      
										    </li>
										    <li class="dropdown-submenu">
										      <a href="#">Lumière et éclairage</a>
										      
										    </li>
										    <h4>Electronique et Electroménager</h4>
										     <li class="dropdown-submenu">
										      <a href="#">Informatique<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•   Ordinateur portable, Netbook</a></li>
										        <li><a href="#">•	Tablette</a></li>
										        <li><a href="#">•	Composant et Accessoire ordinateur</a></li>
										        <li><a href="#">•	Moniteur</a></li>
										        <li><a href="#">•	Equipement de bureaux</a></li>
										        <li><a href="#">•	Logiciel et mémoire stockage</a></li>
										        
										      </ul>
										    </li>
										     <li class="dropdown-submenu">
										      <a href="#">Electroménager<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Climatisation, réfrigérateur et congélation</a></li>
										        <li><a href="#">•	Chauffage</a></li>
										        <li><a href="#">•	Matériel de nettoyage</a></li>
										        <li><a href="#">•	Appareil a buanderie et électroménager pour cuisine</a></li>
										        
										        
										      </ul>
										    </li>
										     <li class="dropdown-submenu">
										      <a href="#">Sécurité et protection<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Alarme et protection contre incendie</a></li>
										        <li><a href="#">•	Camera surveillance</a></li>
										        <li><a href="#">•	Equipement de protection</a></li>
										        <li><a href="#">•	Système de contrôle d’accès</a></li>
										        <li><a href="#">•	Coffre-fort, Serrurier, clé</a></li>
										       
										        
										      </ul>
										    </li>
										     <li class="dropdown-submenu">
										      <a href="#">Appareil photos, Accessoire et son</a>
										      </li>
										      <h4>Publicite, Emballage et Bureaux</h4>
										      <li class="dropdown-submenu">
										      <a href="#">Bureaux et Fourniture scolaire <span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Livre</a></li>
										        <li><a href="#">•	Cahier, Accessoire d’écriture et papier</a></li>
										        <li><a href="#">•	Matériel de Bureaux</a></li>
										        
										        
										      </ul>
										    </li>
										     <li class="dropdown-submenu">
										      <a href="#">Equipement de service<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Distributeur automatique</a></li>
										        <li><a href="#">•	Matériel publicité</a></li>
										        <li><a href="#">•	Equipement de nettoyage</a></li>
										        <li><a href="#">•	Equipement pour hôtel et restauration </a></li>
										        <li><a href="#">•	Equipement supermarché </a></li>
										        <li><a href="#">•	Matériel de laboratoire</a></li>
										        
										      </ul>
										    </li>
										     <li class="dropdown-submenu">
										      <a href="#">Conditionnement et stockage<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Service d’imprimerie</a></li>
										        <li><a href="#">•	Emballage</a></li>
										        <li><a href="#">•	Produit pour l’étiquetage</a></li>
										        <li><a href="#">•	Conditionnement</a></li>
										        
										        
										      </ul>
										    </li>
										    <h4>Plastique et caoutchouc</h4>
										     <li class="dropdown-submenu">
										      <a href="#">Plastique et caoutchouc<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Plastique PVC</a></li>
										        <li><a href="#">•	Plastique recycle</a></li>
										        
										        
										      </ul>
										    </li>
										    <h4>Machine et Outils</h4>
										     <li class="dropdown-submenu">
										      <a href="#">Machine et Outils<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	Machine  </a></li>
										        <li><a href="#">•	 Outils </a></li>
										        <li><a href="#">•	Equipement et matériel  </a></li>
										    
										        
										      </ul>
										    </li>
										    <h4>خدماتك</h4>
										     <li class="dropdown-submenu">
										      <a href="#">خدماتك<span class='tri'> &#x25B6; </span></a>
										      <ul class="dropdown-menu">
												<li><a href="#">•	حلويات الاعراس</a></li>
										        <li><a href="#">•	اعمال يدوية</a></li>
										        <li><a href="#">•	خياطتك</a></li>
										        <li><a href="#">•	اعادة التدوير</a></li>
										        
										        
										      </ul>
										    </li>
										     <li class="dropdown-submenu">
										      <a href="#">Autres</a>
										      
										    </li>

										  </ul>
										</div>

									<input class="input" placeholder="Votre recherche ici">
									<button type='submit' class="search-btn">Chercher</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div class='gr-dt'>
									<a href="{{url('store/')}}"  >
										<i class="fa  fa-truck" ></i>
										<span>Gros</span>
										<!-- <div class="qty">2</div> -->
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class='gr-dt'>
									<a href="{{url('store/')}}" >
										<i class="fa fa-shopping-cart"></i>
										<span>Détails</span>
										<!-- <div class="qty">3</div> -->
									</a>


									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>DA980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>DA 980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: DA 2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
	