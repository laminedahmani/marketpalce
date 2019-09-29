@extends('layouts.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<div class="container  " style="margin-top:20px">
  
  <div class="row menu-1" style="margin:200px -100px 200px 70px">
            <div class="col-md-6">

              <h1 class="btn btn-lg btn-default col-md-5 center " id="insc-b"  >insceiption حانوتك </h1>
            </div>
            <div class="col-md-6">
           <h1 class="btn btn-lg btn-default col-md-5 center align-self-end" id="insc-p">insceiption particulier </h1>
          </div>
        
 </div>




<!-- insription particulier  -->

<div class="container " id="inscription-p" style='display:none'> 


	  <form method="POST" action="{{ route('membre.register') }}">
	   {{ csrf_field() }}
 <div class="form-row">
          <div class="form-group col-md-6" >
            <label >nom</label>
            <input  name='nom' type="text"  class="form-control" placeholder="nom">
			@if ($errors->has('nom'))
				<span class="help-block">
				   <strong>{{ $errors->first('nom') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6" >
            <label for="">prenom</label>
            <input  name='prenom' type="text " class="form-control"   placeholder="prenom">
			@if ($errors->has('prenom'))
				<span class="help-block">
				   <strong>{{ $errors->first('prenom') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input  name='email' type="email" class="form-control" id="inputEmail4" placeholder="Email">
			@if ($errors->has('email'))
				<span class="help-block">
				   <strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">téléphone</label>
            <input  name='tel' type="tel" class="form-control" id="inputPassword4" placeholder="07807204..">
			@if ($errors->has('tel'))
				<span class="help-block">
				   <strong>{{ $errors->first('tel') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">mot de passe</label>
            <input  type="password" class="form-control" id="inputPassword4" placeholder="mot de passe">
			@if ($errors->has('password'))
				<span class="help-block">
				   <strong>{{ $errors->first('password') }}</strong>
				</span>
			@endif
          </div>
           <div class="form-group col-md-6">
            <label for="inputPassword4">confirmation mot de passe</label>
            <input name='' type="password" class="form-control" id="inputPassword4" placeholder="reécrit le mot de passe">
          </div>
        
            <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputState">wilaya</label>
                {!! Form::select('state_id',$states, null, array('class' => 'form-control','id' => 'state','placeholder' => 'Sélectionner votre wilaya') ) !!}
				@if ($errors->has('state_id'))
				<span class="help-block">
				   <strong>{{ $errors->first('state_id') }}</strong>
				</span>
			@endif
            </div>
			
          </div>
        <div class="form-group col-md-10">
          <label for="inputAddress">Address</label>
          <input name='address' type="text" class="form-control" id="inputAddress" placeholder="250 logement , rue ...">
		
        </div>
        <div class="form-group col-md-7 ">
            <input type="submit" class="btn btn-primary" value='inscription' >
          </div>
  </div> 

</form>

</div>



</div>

<script >



$(document).ready(function(){
  $("#insc-b").click(function(){

  $("#inscription-p").hide();
  $("#inscription-b").show();
  $('.menu-1').css({
        'margin-bottom': '20px',
        'margin-top': '20px'
    });
 
});

$("#insc-p").click(function(){
  $("#inscription-b").hide();
  $("#inscription-p").show();
   $('.menu-1').css({
        'margin-bottom': '20px',
        'margin-top': '20px'
    });
  
 
});
});


</script>






@endsection