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
		<div class="col-md-3"><img class="img-circle" src="{{ url('avatar_boutique/'.$boutique->url_photo) }}"  width='200px' height='200px' alt=""  ></div>
		<div class="col-md-6">
			<h1>{{ $boutique->nom_magasin }}</h1>
			<p> {{ $boutique->presentation }}</p>

		</div>
		<div class="col-md-3">
			<p><i class="fa fa-phone" aria-hidden="true"></i> {{ $boutique->tel }}</p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> {{ $boutique->email }}</p>
			<p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $boutique->address }}</p>

		</div>
        <div class="col-md-3">
            <p><b>Wilaya principal:</b> {{ $wilaya->nom }}</p>
            <p><b>Activité principal:</b> {{ $seceur->name }}</p>
            <p><b>Vente par:</b> {{ $boutique->type_magasin }}</p>
           

        </div>
	</div>
</div>


<section>
<div class="container">
    <h3 class="h3">Produit de la boutique</h3>
    @foreach($annonces as $annonce )
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <a href="{{ url('/annonce/'.$annonce->id)}}">
                <div class="product-image9">
                    
                      
                        <img class="pic-1" src="{{ url('/img_annonces/'.$annonce->img_principale) }}">
                        
                   
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                 </a>
                <div class="product-content">
                    <!-- <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul> -->
                    <h3 class="title"><a href="#">{{ $annonce->titre }}</a></h3>
                    <div class="price"> {{ $annonce->prix}}-{{ $annonce->pris_solde}}</div>
                    <a class="add-to-cart" href="{{url('/annonce/'.$annonce->id)}}">voir le produit</a>
                </div>
            </div>
        </div> 


@endforeach
       
        
        
    </div>
</div>


</section>
@stop