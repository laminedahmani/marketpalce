@extends('layouts.dash')

@section('content')




<h3 class='h3 '>Modifier  mon compte</h3>


<!-- insription boutique  -->



  <div class="container " id="inscription-b" > 
    
      <form   method="POST" action="{{ url('modifier/boutique/'.$boutiques->id) }}"  enctype="multipart/form-data">
        {{ csrf_field() }}
         <input type="hidden" name="_method" value='PUT'>
 <div class="form-row">
  
          <div class="form-group col-md-6" >
            <label >nom</label>
            <input  name='nom' type="text"   class="form-control" placeholder="nom" value="{{ $boutiques->nom }}">
			@if ($errors->boutique->has('nom'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('nom') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6" >
            <label for="">prenom</label>
            <input  name='prenom' type="text " class="form-control"   placeholder="prenom" value="{{$boutiques->prenom }}">
			@if ($errors->boutique->has('prenom'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('prenom') }}</strong>
				</span>
			@endif
          </div>
        
          

          <div class="form-group col-md-6">
            <label for="">téléphone</label>
            <input  name='tel' class="form-control" id="" placeholder="07807204.." value="{{ $boutiques->tel }}">
			@if ($errors->boutique->has('tel'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('tel') }}</strong>
				</span>
			@endif
          </div>
          
          <div class="form-group col-md-6">
            <label for="inputPassword4">mot de passe</label>
            <input  name='password' type="password" class="form-control" id="inputPassword4" placeholder="mot de passe">
			@if ($errors->boutique->has('password'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('password') }}</strong>
				</span>
			@endif
         
          </div>
           <div class="form-group col-md-6">
            <label for="inputPassword4">confirmation mot de passe</label>
            <input name="password_confirmation" type="password" class="form-control" id="inputPassword4" placeholder="reécrit le mot de passe">
			@if ($errors->boutique->has('password_confirmation'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('password_confirmation') }}</strong>
				</span>
			@endif
          </div>
        
            <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputState">wilaya</label>
              {!! Form::select('state_id',$states, $value_state->id, array('class' => 'form-control','id' => 'state','placeholder' => 'Sélectionner votre wilaya') ) !!}
			  @if ($errors->boutique->has('state_id'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('state_id') }}</strong>
				</span>
			@endif
          </div>
		  <div class="form-group col-md-6">
            <label for="inputPassword4">Nom du magasin</label>
            <input name="nom_magasin" type="text" class="form-control" id="inputPassword4" placeholder="Nom du magasin..." value="{{ $boutiques->nom_magasin}}">
			@if ($errors->boutique->has('nom_magasin'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('nom_magasin') }}</strong>
				</span>
			@endif
          </div>
      
       
  </div> 
   <div class="form-group col-md-10">
          <label for="inputAddress">Address</label>
          <input  name='address' type="text" class="form-control" id="inputAddress" placeholder="250 logement , rue ..." value="{{ $boutiques->address }}">
        </div>
<div class="form-row">
            <div class="form-group col-md-12">
              <div class="alert alert-info" role="alert">
        information de la boutique
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">pack</label>
              
			   {!! Form::select('pack',[1=>"Pack 1",2=>"Pack 2",3=>"Pack 3"],$boutiques->pack, array('class' => 'form-control','id' => 'pack','placeholder' => "Sélectionner votre pack") ) !!}
			   @if ($errors->boutique->has('pack'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('pack') }}</strong>
				</span>
			@endif
       <p style='color:red'> ce changement nécessite une validation de la boutique par l'administrateur ,contacté nous en privé SVP !</p>
            </div>
			
             <div class="form-group col-md-4">
              <label for="inputState">type de produits</label>
			  {!! Form::select('type_magasin',["Gros"=>"Gros","Détails"=>"Détails","Gros/Détails"=>"Gros/Détails"],$boutiques->type_magasin, array('class' => 'form-control','id' => 'type_magasin','placeholder' => "Sélectionner type du magasin") ) !!}
            @if ($errors->boutique->has('type_magasin'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('type_magasin') }}</strong>
				</span>
			@endif
            </div>
			<div class="form-group col-md-4">
            <label for="inputState">Secteur d'activité</label>
			 {!! Form::select('secteur_activite',$categories,$value_cat, array('class' => 'form-control','id' => 'secteur_activite','placeholder' => "Type d'activité") ) !!}
			 @if ($errors->boutique->has('secteur_activite'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('secteur_activite') }}</strong>
				</span>
			@endif
        </div>
          </div>
         <div class="form-group col-md-10">
          <label for="">Description de la boutique</label>

          <textarea name='presentation'  class="form-control" id="" placeholder="notre boutique ...">{{ $boutiques->presentation }}</textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="">logo/photo</label>
            <input  name='logo' type="file" class="form-control-file" id="inputPassword4" >
          </div>
         <div class="form-group col-md-6 " style='margin: 80px'>
            <input  name='submit' type="submit" class="btn btn-lg   btn-primary" value='Crée ma Boutique' >
          </div> 
          <div class="form-group  col-md-4 " style='margin-top: 80px'>
           <a href="{{ url('boutique')}}" class="btn btn-info btn-lg " role="button" aria-pressed="true">Annuler</a>
          </div>
        
      
 </div>
    
</div>

</form>
</div>






@stop