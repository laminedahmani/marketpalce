@extends('layouts.dash')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md center"><h1> bienvenue sur votre Compte  </h1>  </div>
	</div>
</div>
<div class="container-fluid">
    <h3 class="h3">vos produits</h3>

              @if (session('success'))
					<div class="row">
					   <div class="col-md-3 col-sm-6 col-md-push-4" >
							<div class="alert alert-success" role="alert">
								{{ session('success') }}
							</div>
						</div>
				 </div>
                @endisset  
<div class="row">


        @if(empty($annonces))
        <h3 style="text-align: center;margin-top: 150px;margin-bottom: 150px;border:solid black 1px;color:red">vous avez aucune annonce publier </h3>
        @else
    @foreach($annonces as $annonce )
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="{{ url('/annonce/'.$annonce->id)}}" target="_blank">
                        @if($annonce->img_principale!=null)<img class="pic-1" src="{{url('/img_annonces/'.$annonce->img_principale)}}" alt="">@else <img src="{{url('/img_annonces/default-collect-picture.jpg')}}" class="pic-1" alt=""> @endif
                         <img class="pic-2" src="{{ url('/img/voir.png') }}">
                    </a>
                    <ul class="social">
                        <li><a href="{{ url('/annonce/'.$annonce->id)}}" data-tip="Voir"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Modifier"><i class="fa fa-edit"></i></a></li>
                        <li><a href="#" data-tip="Supprimer"><i class="fa fa-trash"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="{{ url('/annonce/'.$annonce->id)}}">voir</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{ $annonce->titre }}</a></h3>
                    <span class="price">{{ $annonce->prix}}</span>
                </div>
            </div>

        </div>
        @endforeach
       
        @endif
		
		
		

		
		
		
    </div>
    
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


@stop