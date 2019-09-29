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
       <div class="container " id="inscription-b" style='display:none'> 
      <form   action="{{url('inscription') }}"   method="POST" >
        {{ csrf_field() }}
 <div class="form-row">
          <div class="form-group col-md-6" >
            <label >nom</label>
            <input  name='nom' type="text"   class="form-control" placeholder="nom">
          </div>
          <div class="form-group col-md-6" >
            <label for="">prenom</label>
            <input  name='prenom' type="text " class="form-control"   placeholder="prenom">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input  name='email' type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">téléphone</label>
            <input  name='tel' type="tel" class="form-control" id="inputPassword4" placeholder="07807204..">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">mot de passe</label>
            <input  name='pwd' type="password" class="form-control" id="inputPassword4" placeholder="mot de passe">
          </div>
           <div class="form-group col-md-6">
            <label for="inputPassword4">confirmation mot de passe</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="reécrit le mot de passe">
          </div>
        
            <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputState">wilaya</label>
              <select  name='wilaya' id="inputState" class="form-control">
                <option selected>Choose...</option>
                 <option selected>Choose...</option>
                  <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          </div>
        <div class="form-group col-md-10">
          <label for="inputAddress">Address</label>
          <input  name='address' type="text" class="form-control" id="inputAddress" placeholder="250 logement , rue ...">
        </div>
       
  </div> 
 
<div class="form-row">
            <div class="form-group col-md-12">
              <div class="alert alert-info" role="alert">
        information de la boutique
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">pack</label>
              <select name='typepack' id="inputState" class="form-control">
                <option selected>1</option>
                 <option selected>2</option>
                  <option selected>3</option>
                <option>...</option>
              </select>
            </div>
             <div class="form-group col-md-4">
              <label for="inputState">type de produits</label>
              <select name='type_magasin' id="inputState" class="form-control">
                <option selected>Choose...</option>
                 <option selected>Choose...</option>
                  <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <label for="inputState">Secteur d'activité</label>
            <select  name='categorie' id="inputState" class="form-control">
              <option selected>Choose...</option>
               <option selected>Choose...</option>
                <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
         <div class="form-group col-md-10">
          <label for="">Description de la boutique</label>

          <textarea name='description'  class="form-control" id="" placeholder="notre boutique ..."></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="">logo/photo</label>
            <input  name='' type="file" class="form-control-file" id="inputPassword4" >
          </div>
         <div class="form-group col-md-7 ">
            <input  name='submit' type="submit" class="btn btn-primary" value='Crée ma Boutique' >
          </div> 
        
      
 </div>
    
</div>

</form>
</div>



<!-- insription particulier  -->

<div class="container " id="inscription-p" style='display:none'> 

      <form  type='POST'  action='{{ url('home')}}'>
 <div class="form-row">
          <div class="form-group col-md-6" >
            <label >nom</label>
            <input  name='' type="text"  class="form-control" placeholder="nom">
          </div>
          <div class="form-group col-md-6" >
            <label for="">prenom</label>
            <input  name='' type="text " class="form-control"   placeholder="prenom">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input  name='' type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">téléphone</label>
            <input  name='' type="tel" class="form-control" id="inputPassword4" placeholder="07807204..">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">mot de passe</label>
            <input  type="password" class="form-control" id="inputPassword4" placeholder="mot de passe">
          </div>
           <div class="form-group col-md-6">
            <label for="inputPassword4">confirmation mot de passe</label>
            <input name='' type="password" class="form-control" id="inputPassword4" placeholder="reécrit le mot de passe">
          </div>
        
            <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputState">wilaya</label>
              <select name='' id="inputState" class="form-control">
                <option selected>Choose...</option>
                 <option selected>Choose...</option>
                  <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          </div>
        <div class="form-group col-md-10">
          <label for="inputAddress">Address</label>
          <input name='' type="text" class="form-control" id="inputAddress" placeholder="250 logement , rue ...">
        </div>
        <div class="form-group col-md-7 ">
            <input name='' type="submit" class="btn btn-primary" value='Crée ma Boutique' >
          </div>
  </div> 



</div>



</div>

<script >



$(document).ready(function(){
  $("#insc-b").click(function(){
  $("#inscription-p").hide();
  $("#inscription-b").show();
  
 
});

$("#insc-p").click(function(){
  $("#inscription-b").hide();
  $("#inscription-p").show();
  
 
});
});


</script>






@endsection