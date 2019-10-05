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
      <select name='categorie_id' class="form-control" id='categorie' placeholder = 'Sélectionner votre categorie'>
        <option>Sélectionner votre categorie</option>
       @foreach($categories as $categorie)
       <option value="{{ $categorie->id }}"> {{ $categorie->name }}</option>
       @endforeach
       </select>
 
    </div>

  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="cat" class="col-md-3 control-label">Sous Catégorie</label>
    <div class="col-sm-6">
      <select name='subcategorie_id' class="form-control" id="subcategorie">
      
      
       </select>
     
    </div>
    
  </div> 
  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">wilaya/pays</label>
    <div class="col-sm-6">
           {!! Form::select('state_id',$states, null, array('class' => 'form-control','id' => 'state','placeholder' => 'Sélectionner votre wilaya') ) !!}
        @if ($errors->membre->has('state_id'))
        <span class="alert-danger">
           <strong>{{$errors->membre->first('state_id') }}</strong>
        </span>
      @endif
  
    </div>
  </div> <!-- form-group // -->
  <hr>
<div class="form-group">
	<label for="name" class="col-sm-3 control-label">Type</label>
	<div class="col-sm-9">
		<label class="radio-inline">
	  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">Gros
	</label>
	<label class="radio-inline">
	  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2"> Détails
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
     <select class="form-control" name='wilaya'>
	<option value="">choisir</option>
	<option value="texnolog2">Bon </option>
	<option value="texnolog3"> Trés bon </option>
	<option value="texnolog2">Jamais utilisé </option>
	<option value="texnolog3"> Moyen </option>
   </select>
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">couleur</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="name" id="name" placeholder="exp : rouge">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="about" class="col-sm-3 control-label">Déscription</label>
    <div class="col-sm-9">
      <textarea class="form-control"></textarea>
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="qty" class="col-sm-3 control-label">Quantité</label>
    <div class="col-sm-3">
   <input type="number" class="form-control" name="quantit" id="qty" placeholder="1">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">LES PRIX en DA</label>
    <div class="col-sm-3"> 
	  <label class="control-label small" for="date_start">Prix</label>
	  <input type="text" class="form-control" name="prix" id="date_start" placeholder="2200">
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
      <label class="control-label small" for="file_img">Autre images</label>  <input type="file" name="file_archive">
    </div>
  </div> <!-- form-group // -->
  
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->

  
</div> <!-- container// -->

<script type="text/javascript">
    $('#categorie').change(function(){
    var cat_id = $(this).val();  
    if(cat_id){
        $.ajax({
           type:"GET",
           url:"{{url('get-categorie-list')}}?cat_id="+cat_id,
           dataType:"json",
           success:function(res){  
            alert(cat_id);             
            if(res){
                $("#subcategorie").empty();
                $("#subcategorie").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#subcategorie").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#subcategorie").empty();
            }
           }
        
        });
    }    
   });

</script>


@stop