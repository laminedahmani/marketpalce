@extends('layouts.master')

@section('content')

	
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<!-- <div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#">All Categories</a></li>
							<li><a href="#">Accessories</a></li>
							<li class="active">Headphones (227,490 Results)</li>
						</ul>
					</div>
				</div> -->
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<!-- <div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Laptops
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Smartphones
										<small>(740)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Cameras
										<small>(1450)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Accessories
										<small>(578)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-5">
									<label for="category-5">
										<span></span>
										Laptops
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-6">
									<label for="category-6">
										<span></span>
										Smartphones
										<small>(740)</small>
									</label>
								</div>
							</div>
						</div> -->
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<!-- <div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div> -->
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categorie</h3>
							<div class="checkbox-filter">
								@foreach( $categories as $categorie )
								<div class="input-checkbox">
									
									<label for="brand-1">
										<a href=""><span>{{ $categorie->name }}</span></a>
										
										<small>(578)</small>
									</label>
								</div>
								@endforeach
								
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Plus vendus</h3>
							@foreach( $annoncevendu as $annoncev )
							<div class="product-widget">
								<div class="product-img">
									<img src="{{url('/img_annonces/'.$annoncev->img_principale)}}" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">{{$annoncev->titre}}</a></h3>
									<h4 class="product-price">{{$annoncev->prix}} <del class="product-old-price">{{$annoncev->prix_solde}}</del></h4>
								</div>
							</div>
							@endforeach
							

							
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<form method="get" action="{{ url('marquet/' ) }}">
									
								<label>
									Filtré par:
									<select class="input-select">
										<label>Type</label>
										<option value="grop"><a href="">Gros</a></option>
										<option value="details"><a href="">Détails</a></option>
										<option value="grop/détails"><a href="">Gros/Détails</a></option>
									</select>
								</label>

								
									<select class="input-select">
										<option>wilaya</option>
										@foreach($wilayas as $wilaya )
										<option value="{{ $wilaya->id }}"><a href="{{ url('marquet/wilaya='.$wilaya->id ) }}"> {{ $wilaya->nom}}</a></option>
										@endforeach
										
									</select>
								
								<intput type='submit' class="btn btn-danger">FILTRE</intput>
								</form>
							</div>
							<!-- <ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul> -->
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							@foreach( $annonces as $annonce )
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="{{url('/annonce/'.$annonce->id)}}">
									<div class="product-img">
										<img src="{{url('/img_annonces/'.$annonce->img_principale)}}" alt="">
										<div class="product-label">
											<!-- <span class="sale">-30%</span>
											<span class="new">NEW</span> -->
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">{{ $annonce->titre }}</a></h3>
										<h4 class="product-price">DA {{ $annonce->prix }}  <del class="product-old-price">DA {{ $annonce->prix_solde }} </del></h4>
										<!-- <div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div> -->
										<!-- <div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div> -->
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Voir</button>
									</div>
								</div>
							</a>
							</div>
							@endforeach
							<!-- /product -->

							<!-- product -->
							
							<!-- /product -->

							
							
							<!-- /product -->

							<!-- product -->
							
							<!-- /product -->

							

							<!-- product -->
							
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<!-- <span class="store-qty">Showing 20-100 products</span> -->
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@stop	

	</body>
</html>
