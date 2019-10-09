@extends('layouts.dash')

@section('content')
<div class="container">
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Crée votre annonce</h3> 
</div> 
<div class="panel-body">
  
<form action="{{ url('/produits/ajout') }}"  method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">


   {{ csrf_field() }}
<div class="form-group">
    <label for="cat" class="col-md-3 control-label">Catégorie</label>
    <div class="col-sm-6">
	    {!! Form::select('categorie_id',$categories, null, array('class' => 'form-control','id' => 'categorie_id','placeholder' => 'Sélectionner votre catégorie') ) !!}
		@if ($errors->has('categorie_id'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('categorie_id') }}</strong>
				</span>
			@endif
    </div>

  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="cat" class="col-md-3 control-label">Sous Catégorie</label>
    <div class="col-sm-6">
      {!! Form::select('subcategorie_id',[""=>"Sélectionner votre sous catégorie"], null, array('class' => 'form-control','id' => 'subcategorie_id') ) !!}
	  	@if ($errors->has('subcategorie_id'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('subcategorie_id') }}</strong>
				</span>
			@endif
    </div>
    
  </div> 
  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">wilaya/pays</label>
    <div class="col-sm-6">
           {!! Form::select('state_id',$states, null, array('class' => 'form-control','id' => 'state','placeholder' => 'Sélectionner votre wilaya') ) !!}
		   	@if ($errors->has('state_id'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('state_id') }}</strong>
				</span>
			@endif

    </div>
  </div> <!-- form-group // -->
  <hr>
<div class="form-group">
	<label for="name" class="col-sm-3 control-label">Type</label>
	<div class="col-sm-9">
		<label class="radio-inline">
	  <input type="radio" name="type_annonce" id="inlineRadio1" value="Gros">Gros
	</label>
	<label class="radio-inline">
	  <input type="radio" name="type_annonce" id="inlineRadio2" value="Détails"> Détails
	</label>
	@if ($errors->has('type_annonce'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('type_annonce') }}</strong>
				</span>
			@endif
	</div>
</div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Titre</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="titre" id="name" placeholder="exp: clio 4 ">
	  	@if ($errors->has('titre'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('titre') }}</strong>
				</span>
			@endif
    </div>
  </div> <!-- form-group // -->


   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Marque</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="marque" id="name" placeholder="exp: sumsung , renault, LG ">
	  	@if ($errors->has('marque'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('marque') }}</strong>
				</span>
			@endif
    </div>
  </div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Anne</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="anne"  min="1900" max="2099" step="1"  placeholder="exp: 2012 ">
	  	@if ($errors->has('anne'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('anne') }}</strong>
				</span>
			@endif
    </div>
  </div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Taille</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="taille" id="name" placeholder="exp: XXL">
	  	@if ($errors->has('taille'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('taille') }}</strong>
				</span>
			@endif
    </div>
  </div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Modele</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="modele" id="name" placeholder="exp: style ">
	       @if ($errors->has('modele'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('modele') }}</strong>
				</span>
			@endif
    </div>
		
				
		
  </div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Etat</label>
    <div class="col-sm-9">
	 {!! Form::select('etat',["Bon"=>"Bon","Trés bon"=>"Trés bon","Jamais utilisé"=>"Jamais utilisé","Moyen"=>"Trés bon"],null, array('class' => 'form-control','placeholder' => "choisir l'état du produit") ) !!}
	 	@if ($errors->has('etat'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('etat') }}</strong>
				</span>
			@endif
	</div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">couleur</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="couleur" id="name" placeholder="exp : rouge">
	  	@if ($errors->has('couleur'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('couleur') }}</strong>
				</span>
			@endif
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="about" class="col-sm-3 control-label">Déscription</label>
    <div class="col-sm-9">
      <textarea class="form-control" name="description"></textarea>
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="qty" class="col-sm-3 control-label">Quantité</label>
    <div class="col-sm-3">
   <input type="number" class="form-control" name="quantite" id="qty" placeholder="1">
   	@if ($errors->has('quantite'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('quantite') }}</strong>
				</span>
			@endif
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">LES PRIX en DA</label>
    <div class="col-sm-3"> 
	  <label class="control-label small" for="date_start">Prix</label>
	  <input type="text" class="form-control" name="prix"  placeholder="2200">
	  	@if ($errors->has('prix'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('prix') }}</strong>
				</span>
			@endif
    </div>
	<div class="col-sm-3">   
	  <label class="control-label small" for="date_finish">Prix du solde</label>
	  <input type="text" class="form-control" name="prix_solde" id="date_finish" placeholder="600">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Les Image</label>
    <div class="col-sm-3">
      <label class="control-label small" for="file_img">image principale</label> <input type="file" name="img_principale">
    </div>
	<div class="col-sm-3">
      <label class="control-label small" for="file_img">Autre images</label>  <input type="file" name="autre_images[]" multiple="multiple">
	  @if ($errors->has('autre_images'))
				<span class="alert-danger">
				   <strong>{{ $errors->first('autre_images') }}</strong>
				</span>
			@endif
    </div>
  </div> <!-- form-group // -->
  
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Ajouter produit</button>
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->

  
</div> <!-- container// -->





<!--script ajax pour faire la mise a jour des souscatégories selon la catégories sélectionnée-->	
		<script>
			$( document ).ready(function() {
				$("#categorie_id").change(function(){
					$.ajax({
				   	url:"{{ url('/get-categorie-list') }}",
				    dataType: 'json',
				    data:'categorie_id='+ $("#categorie_id").val(),
					// if you recive response from the back-end
				    success:function(data){
						$("#subcategorie_id option").remove();
						if(data.length>0){
							$("#subcategorie_id").prop('disabled', false);
							$("#subcategorie_id").append('<option value="">Selectionner une sous catégorie</option>')
							$.each(data, function(){
								 $("#subcategorie_id").append('<option value="'+ this.id +'">'+ this.name +'</option>')
							});
						}else{
							$("#subcategorie_id").prop("disabled", "disabled");
							$("#subcategorie_id").append('<option value=""> y\'a pas de sous catégorie</option>')
						}
			        },
					
					error: function (data) {
					   alert("souscatégories n’excite pas!!");
					},
				});
				});
              });
		</script>

@stop