

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
						<li><a href=" {{ url('connexion') }} "><i class="fa fa fa-sign-in"></i> Se connecter</a></li>
						
						@else
						<li><a href=" {{ url('connexion') }} "><i class="fa fa-user-o"></i> Mon compte</a></li>
							
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
								<form  method='GET' action="{{url('store/')}}">
									<div class="dropdown" style='display:inline'>
										  <button class="btn btn-info dropdown-toggle categorie-btn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    Catégorie 
										    <i class="fa fa-list" aria-hidden="true"></i>

										  </button>
										  <ul class="dropdown-menu multi-level" aria-labelledby="dLabel" style='width:470px'>
										    @php $titre_categorie=""  @endphp
									       @foreach($categories_dfault as $categorie)
										   @php 	$cat=str_replace(" ","-",$categorie->name); @endphp
					                        
										     @if($titre_categorie!=$categorie->titre) <h4>{{$categorie->titre}}</h4> @endif
										    <li class="dropdown-submenu">
											 @php
												  $subcategories=App\Http\Controllers\AnnonceController::getSubcatLists($categorie->id);
												
                                               @endphp
										      <a href="/{{$cat}}">{{$categorie->name}} @if(count($subcategories)>0)<span class='tri'> &#x25B6; </span>@endif</a>
											  @if(count($subcategories)>0)
												   <ul class="dropdown-menu">
													  @foreach($subcategories as $subcategorie)
													  @php 	$subcat=str_replace(" ","-",$subcategorie->name); @endphp
													   <li><a href="/{{$cat}}/{{$subcat}}">• {{$subcategorie->name}}</a></li>
													   @endforeach  
													</ul>
												@endif
										    </li>
										  @php $titre_categorie=$categorie->titre;@endphp
										 @endforeach  

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
	