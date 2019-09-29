@extends('layouts.master')

<!-- peut étre vue juste par l'admin avant approvation  -->


@section('content')



<!-- <div class="container-fluid">
	<div class="row">
		<div class="col"><h1> boutique profil ( vue par visiteur )</h1></div>
	</div>
</div> -->
<section>
<div class="container margtop" >
	<div class="row" >
		<div class="col-md-3"><img class="img-circle" src="{{ url('img/004.jpg') }}"  width='200px' height='200px' alt=""  ></div>
		<div class="col-md-6">
			<h1>titre</h1>
			<p> description</p>

		</div>
		<div class="col-md-3">
			<p><i class="fa fa-phone" aria-hidden="true"></i> 0875665985</p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> edgvrg@sdfgdrgd.com</p>
			<p><i class="fa fa-map-marker" aria-hidden="true"></i> alger boumerdes rue 15 bt 500</p>

		</div>
	</div>
</div>


<section>
<div class="container">
    <h3 class="h3">Produit de la boutique</h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
                    </a>
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price"> $12.60 - $40.53</div>
                    <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                </div>
            </div>
        </div> 
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-4.jpg">
                    </a>
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                    <h3 class="title"><a href="#">Men's Shirt</a></h3>
                    <div class="price"> $10.20 </div>
                    <a class="add-to-cart" href="">READ MORE</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-6.jpg">
                    </a>
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price"> $12.60 - $40.53</div>
                    <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-7.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-8.jpg">
                    </a>
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price"> $12.60 - $40.53</div>
                    <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
@stop