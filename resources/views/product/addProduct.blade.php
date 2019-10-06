@extends('layouts.dash')

@section('content')
<div class="container">
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Crée votre annonce</h3> 
</div> 
<div class="panel-body">
  
<form action=""  method="POST" class="form-horizontal" role="form">



<div class="form-group">
    <label for="cat" class="col-md-3 control-label">Catégorie</label>
    <div class="col-sm-6">
	    {!! Form::select('categorie_id',$categories, null, array('class' => 'form-control','id' => 'categorie_id','placeholder' => 'Sélectionner votre catégorie') ) !!}
    </div>

  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="cat" class="col-md-3 control-label">Sous Catégorie</label>
    <div class="col-sm-6">
      {!! Form::select('subcategorie_id',[""=>"Sélectionner votre sous catégorie"], null, array('class' => 'form-control','id' => 'subcategorie_id') ) !!}
    </div>
    
  </div> 
  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">wilaya/pays</label>
    <div class="col-sm-6">
           {!! Form::select('state_id',$states, null, array('class' => 'form-control','id' => 'state','placeholder' => 'Sélectionner votre wilaya') ) !!}

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

	</div>
</div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Titre</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="titre" id="name" placeholder="exp: clio 4 ">
    </div>
  </div> <!-- form-group // -->


   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Marque</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="marque" id="name" placeholder="exp: sumsung , renault, LG ">
    </div>
  </div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Anne</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="anne" id="name" placeholder="exp: 2002 ">
    </div>
  </div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Taille</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="taille" id="name" placeholder="exp: XXL">
    </div>
  </div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Modele</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="modele" id="name" placeholder="exp: style ">
    </div>
  </div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Etat</label>
    <div class="col-sm-9">
     <select class="form-control" name='etat'>
	<option value="">choisir l'état du produit</option>
	<option value="Bon">Bon </option>
	<option value="Trés bon"> Trés bon </option>
	<option value="Jamais utilisé">Jamais utilisé </option>
	<option value=" Moyen"> Moyen </option>
   </select>
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">couleur</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="couleur" id="name" placeholder="exp : rouge">
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
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">LES PRIX en DA</label>
    <div class="col-sm-3"> 
	  <label class="control-label small" for="date_start">Prix</label>
	  <input type="text" class="form-control" name="prix"  placeholder="2200">
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
      <label class="control-label small" for="file_img">Autre images</label>  <input type="file" name="autre_image">
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