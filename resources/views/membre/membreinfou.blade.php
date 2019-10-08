@extends('layouts.dash')

@section('content')




<h3 class='h3'>Modifier  mon compte</h3>
<div class="container " id="inscription-p"  > 


	  <form method="POST" action="{{ url('modifier/membre/'.$membres->id) }}">
	   {{ csrf_field() }}
	   <input type="hidden" name="_method" value='PUT'>
 <div class="form-row">
          <div class="form-group col-md-6" >
            <label >nom</label>
            <input  name='nom' type="text"  class="form-control" placeholder="nom" value="{{ $membres->nom }}">
			@if ($errors->membre->has('nom'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('nom') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6" >
            <label for="">prenom</label>
            <input  name='prenom' type="text " class="form-control"   placeholder="prenom" value="{{ $membres->prenom }}">
			@if ($errors->membre->has('prenom'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('prenom') }}</strong>
				</span>
			@endif
          </div>
         
          <div class="form-group col-md-6">
            <label for="inputPassword4">téléphone</label>
            <input  name='tel' type="tel" class="form-control" id="inputPassword4" placeholder="07807204.." value="{{ $membres->tel }}">
			@if ($errors->membre->has('tel'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('tel') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Nouveau mot de passe</label>
            <input  type="password" name="password" class="form-control" id="inputPassword4" placeholder="mot de passe">
			@if ($errors->membre->has('password'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('password') }}</strong>
				</span>
			@endif
          </div>
           <div class="form-group col-md-6">
            <label for="inputPassword4">confirmation mot de passe</label>
            <input name='password_confirmation' type="password" class="form-control" id="inputPassword4" placeholder="reécrit le mot de passe">
				@if ($errors->membre->has('password_confirmation'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('password_confirmation') }}</strong>
				</span>
			@endif
          </div>
        	
            <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputState">wilaya</label>
              	
                {!! Form::select('state_id',$states, $value_state->code , array('class' => 'form-control','id' => 'state','placeholder' => 'Sélectionner votre wilaya')) !!}
				@if ($errors->membre->has('state_id'))
				<span class="alert-danger">
				   <strong>{{$errors->membre->first('state_id') }}</strong>
				</span>
			@endif
            </div>
			
          </div>
        <div class="form-group col-md-10">
          <label for="inputAddress">Address</label>
          <input name='address' type="text" class="form-control" id="inputAddress" placeholder="250 logement , rue ..." value="{{ $membres->address }}">
		
        </div>
        <div class="" >
        <div class="form-group col-md-8" style='margin-top: 80px'>
            <input type="submit" class="btn btn-lg btn-success" value='Modifier' >
          </div>
            <div class="form-group  col-md-4 " style='margin: 80px 0 100px'>
            <a href="{{ url('membre') }}" class="btn btn-info btn-lg " role="button" aria-pressed="true">Annuler</a>
          </div>
        </div>
  </div> 

</form>

</div>



@stop