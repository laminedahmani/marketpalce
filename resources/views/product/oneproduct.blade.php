@extends('layouts.master')

@section('content')
		<!-- BREADCRUMB -->
		
		<!-- /BREADCRUMB -->
<div class="clearfix" style='margin-bottom:80px'></div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
									
							@foreach($photos as $photo)
							
							<div class="product-preview">
								<img src="{{ url('/img_annonces/'.$photo->url_photo) }}" alt="">
							</div>
							@endforeach
						
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							@foreach($photos as $photo)
							<div class="product-preview">
								<img src="{{ url('/img_annonces/'.$photo->url_photo) }}" alt="">
							</div>
							@endforeach
							

							

							
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{ $annonce->titre }}</h2>
							<h5><span style='color:red;'>categorie du produit:</span> {{ $categorie->name}}</h5>
							<h6><span style='color:red;'>sous categorie du produit: </span>{{$souscategorie->name}}</h6>
							<h6><span style='color:red;'>wilaya: </span>{{$wilaya->nom}}</h6>
							<!-- <div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div> -->
							<div>
								<h3 class="product-price">{{ $annonce->prix }} DA<del class="product-old-price">{{ $annonce->prix_solde }} DA</del></h3>
								<span class="product-available">par :{{ $annonce->type_annonce }}</span>
							</div>
							<p>{{ $annonce->description }}</p>

							<div class="product-options">
								<p><span style='color:red;font-size:18px'>Marque:  </span>{{ $annonce->marque }}</p>
								<p><span style='color:red;font-size:18px'>Anné:  </span>{{ $annonce->anne }}</p>
								<p><span style='color:red;font-size:18px'>Taille:  </span>{{ $annonce->taille }}</p>
								<p><span style='color:red;font-size:18px'>Couleur:  </span>{{ $annonce->couleur }}</p>
								<p><span style='color:red;font-size:18px'>Etat:  </span>{{ $annonce->etat }}</p>
								<p><span style='color:red;font-size:18px'>Quantité:  </span>{{ $annonce->quantite }}</p>
								<!-- <label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label> -->
								
							</div>

							<!-- <div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">Headphones</a></li>
								<li><a href="#">Accessories</a></li>
							</ul> -->

							<ul class="product-links">
								<li>partagé:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<div class="clearfix" style='margin-bottom:50px'></div>
		 
		

			
@endsection
