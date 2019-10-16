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
							<div class="checkbox-filter"> -->
						<div class="aside">
							<h3 class="aside-title">Categorie</h3>
							<div class="checkbox-filter">
								@foreach( $categories_dfault as $categorie )
								<div class="input-checkbox">
									 @php 	$cat=str_replace(" ","-",$categorie->name); @endphp
									<label for="brand-1">
										<a href="{{url('marquet/'.$cat)}}"><span>{{ $categorie->name }}</span></a>
										
										<small>({{ $categorie->nbr_annonces }})</small>
									</label>
								</div>
								@endforeach
								
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget{{-- 
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
						--}} -->	

							
						

						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="">
								<form method="get" action="{{ route('filtre') }}">
								 <input type="hidden" value="{{ $id_cat }}" name="categorie">
								 <input type="hidden" value="{{ $id_subcat }}" name="subcategorie">
								    {{ csrf_field() }}
									<div class="form-row">
								
									 <div class="form-group col-md-4">
									 	<label>
									Filtré par:  
								
									    {!! Form::select('type_annonce',["Grop"=>"Grop","Détails"=>"Détails","Grop/Détails"=>"Grop/Détails"],null, array('class' => 'form-control','id' => 'type_annonce','placeholder' => "Type") ) !!}
								     </label>
									</div>

								 <div class="form-group col-md-4">
								  {!! Form::select('state_id',$states, null, array('class' => 'form-control','id' => 'state','placeholder' => 'Sélectionner votre wilaya') ) !!}
								</div>
								 <div class="form-group col-md-4">
								<button type="submit" class="btn btn-danger">FILTRE</button>
							</div>
								</div>
								</form>
							</div>
							<!-- <ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul> -->
						</div>
						<!-- /store top filter -->
						@if( count($annonces)==0 )
								 <div class="alert alert-danger" role="alert">
							        @isset($retour)
									      Infos! Accune annonce trouver pour la catégorie @isset($retour)  <strong>{{ $retour }} </strong> @endisset 
									@else
									     <strong>Infos!</strong>   Accune annonce trouver pour cette rercherche
									@endisset  
								</div>
						   @endif
                        </div>
                   
						<!-- store products -->
						<div class="row">
						
						
						
							<!-- product -->
							@foreach( $annonces as $annonce )
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="{{url('/annonce/'.$annonce->id)}}">
									<div class="product-img">
										@if($annonce->img_principale!=null)<img src="{{url('/img_annonces/'.$annonce->img_principale)}}" alt="">@else <img src="{{url('/img_annonces/default-collect-picture.jpg')}}" alt=""> @endif
										<div class="product-label">
											<!-- <span class="sale">-30%</span>
											<span class="new">NEW</span> -->
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">{{ $annonce->categorie->name }}</p>
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
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> <a href="{{url('/annonce/'.$annonce->id)}}">Voir</a></button>
									</div>
									</a>
								</div>
							
							</div>
							@endforeach
							
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
                          
								     <!--Paginator view-->	
						 <!--	<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>-->
							
							     <!--Paginator view-->	
								<?php
								// config
								$link_limit = 4; // maximum number of links (a little bit inaccurate, but will be ok for now)
								?>

								@if ($annonces->lastPage() > 1)
									
										   <ul class="store-pagination">
										  <li><a href="{{ $annonces->url(1) }}"><i class="fa fa-angle-left"></i></a></li>
										@for ($i = 1; $i <= $annonces->lastPage(); $i++)
											<?php
											$half_total_links = floor($link_limit / 2);
											$from = $annonces->currentPage() - $half_total_links;
											$to = $annonces->currentPage() + $half_total_links;
											if ($annonces->currentPage() < $half_total_links) {
											   $to += $half_total_links - $annonces->currentPage();
											}
											if ($annonces->lastPage() - $annonces->currentPage() < $half_total_links) {
												$from -= $half_total_links - ($annonces->lastPage() - $annonces->currentPage()) - 1;
											}
											?>
											@if ($from < $i && $i < $to)
												
													<li class="{{ ($annonces->currentPage() == $i) ? ' active' : '' }}"><a  href="{{$annonces->url($i)}}" >{{ $i }}</a></li>
												
											@endif
										@endfor
										
										
										<li><a href="{{ $annonces->url($annonces->lastPage()) }}"><i class="fa fa-angle-right" style="margin-height:25px"></i></a></li>
										</ul>
										
						
								@endif
							
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