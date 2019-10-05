@extends('layouts.dash')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md center"><h1> bienvenue sur votre Compte  </h1> </div>
	</div>
</div>

<h3 class='h3'>information personnelle</h3>


<!-- insription boutique  -->



  <div class="container " id="inscription-b" > 
    
      <form   method="POST" action="{{ url('/boutique/register') }}"  enctype="multipart/form-data">
        {{ csrf_field() }}
        
 <div class="form-row">
  
          <div class="form-group col-md-6" >
            <label >nom</label>
            <input  name='nom' type="text"   class="form-control" placeholder="nom" value="{{ old('nom') }}">
			@if ($errors->boutique->has('nom'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('nom') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6" >
            <label for="">prenom</label>
            <input  name='prenom' type="text " class="form-control"   placeholder="prenom" value="{{ old('prenom') }}">
			@if ($errors->boutique->has('prenom'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('prenom') }}</strong>
				</span>
			@endif
          </div>
        
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input  name='email' type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ old('email') }}">
			@if ($errors->boutique->has('email'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('email') }}</strong>
				</span>
			@endif
   
          </div>

          <div class="form-group col-md-6">
            <label for="">téléphone</label>
            <input  name='tel' class="form-control" id="" placeholder="07807204.." value="{{ old('tel') }}">
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
              {!! Form::select('state_id',$states, null, array('class' => 'form-control','id' => 'state','placeholder' => 'Sélectionner votre wilaya') ) !!}
			  @if ($errors->boutique->has('state_id'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('state_id') }}</strong>
				</span>
			@endif
          </div>
		  <div class="form-group col-md-6">
            <label for="inputPassword4">Nom du magasin</label>
            <input name="nom_magasin" type="text" class="form-control" id="inputPassword4" placeholder="Nom du magasin..." value="{{ old('nom_magasin') }}">
			@if ($errors->boutique->has('nom_magasin'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('nom_magasin') }}</strong>
				</span>
			@endif
          </div>
      
       
  </div> 
   <div class="form-group col-md-10">
          <label for="inputAddress">Address</label>
          <input  name='address' type="text" class="form-control" id="inputAddress" placeholder="250 logement , rue ..." value="{{ old('address') }}">
        </div>
<div class="form-row">
            <div class="form-group col-md-12">
              <div class="alert alert-info" role="alert">
        information de la boutique
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">pack</label>
			   {!! Form::select('pack',[1=>"Pack 1",2=>"Pack 2",3=>"Pack 3"],null, array('class' => 'form-control','id' => 'pack','placeholder' => "Sélectionner votre pack") ) !!}
			   @if ($errors->boutique->has('pack'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('pack') }}</strong>
				</span>
			@endif
            </div>
			
             <div class="form-group col-md-4">
              <label for="inputState">type de produits</label>
			  {!! Form::select('type_magasin',["Gros"=>"Gros","Détails"=>"Détails","Gros/Détails"=>"Gros/Détails"],null, array('class' => 'form-control','id' => 'type_magasin','placeholder' => "Sélectionner type du magasin") ) !!}
            @if ($errors->boutique->has('type_magasin'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('type_magasin') }}</strong>
				</span>
			@endif
            </div>
			<div class="form-group col-md-4">
            <label for="inputState">Secteur d'activité</label>
			 {!! Form::select('secteur_activite',$categories,null, array('class' => 'form-control','id' => 'secteur_activite','placeholder' => "Type d'activité") ) !!}
			 @if ($errors->boutique->has('secteur_activite'))
				<span class="alert-danger">
				   <strong>{{ $errors->boutique->first('secteur_activite') }}</strong>
				</span>
			@endif
        </div>
          </div>
         <div class="form-group col-md-10">
          <label for="">Description de la boutique</label>

          <textarea name='presentation'  class="form-control" id="" placeholder="notre boutique ...">{{ old('presentation') }}</textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="">logo/photo</label>
            <input  name='logo' type="file" class="form-control-file" id="inputPassword4" >
          </div>
         <div class="form-group col-md-7 ">
            <input  name='submit' type="submit" class="btn btn-primary" value='Crée ma Boutique' >
          </div> 
        
      
 </div>
    
</div>

</form>
</div>






@stop