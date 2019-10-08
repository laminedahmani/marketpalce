
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
				   <div class="col-md-3 col-sm-6 col-md-push-4" >
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
					</div>
                @endisset  
<div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-1.jpeg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-2.jpeg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Voir"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Modifier"><i class="fa fa-edit"></i></a></li>
                        <li><a href="#" data-tip="Supprimer"><i class="fa fa-trash"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <span class="price">$599.99</span>
                </div>
            </div>
        </div>
        
       
        
    </div>



@stop