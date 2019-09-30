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

<div class="container " id="inscription-p"  style="@if(!$errors->membre->isNotEmpty())display:none @endif" > 


	  <form method="POST" action="{{ route('membre.register') }}">
	   {{ csrf_field() }}
 <div class="form-row">
          <div class="form-group col-md-6" >
            <label >nom</label>
            <input  name='nom' type="text"  class="form-control" placeholder="nom" value="{{ old('nom') }}">
			@if ($errors->membre->has('nom'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('nom') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6" >
            <label for="">prenom</label>
            <input  name='prenom' type="text " class="form-control"   placeholder="prenom" value="{{ old('prenom') }}">
			@if ($errors->membre->has('prenom'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('prenom') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input  name='email' type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ old('email') }}">
			@if ($errors->membre->has('email'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('email') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">téléphone</label>
            <input  name='tel' type="tel" class="form-control" id="inputPassword4" placeholder="07807204.." value="{{ old('tel') }}">
			@if ($errors->membre->has('tel'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('tel') }}</strong>
				</span>
			@endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">mot de passe</label>
            <input  type="password" class="form-control" id="inputPassword4" placeholder="mot de passe">
			@if ($errors->membre->has('password'))
				<span class="alert-danger">
				   <strong>{{ $errors->membre->first('password') }}</strong>
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
				@if ($errors->membre->has('state_id'))
				<span class="alert-danger">
				   <strong>{{$errors->membre->first('state_id') }}</strong>
				</span>
			@endif
            </div>
			
          </div>
        <div class="form-group col-md-10">
          <label for="inputAddress">Address</label>
          <input name='address' type="text" class="form-control" id="inputAddress" placeholder="250 logement , rue ..." value="{{ old('address') }}">
		
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