@extends('layouts.admin')
@section('content')




<div class="container">
	<div class="row">
		<div class="col-md center"><h1> ajouté une pub</h1> </div>
	</div>
	


	<form  method='POST' action='{{ url("/admin/addpub") }}'>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">titre</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="titre">
    </div>
     {{ csrf_field() }}
  <!-- </div>
 <div class="form-row"> -->
    <div class="form-group col-md-4">
      <label for="lien">lien</label>
      <input type="text" class="form-control" id="lien" placeholder="lien">
    </div>
    
  </div>
  <div class="form-row"> 
    <div class="form-group col-md-4">
      <label for="inputCity">date experation</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">emplacement</label>
      <select id="inputState" class="form-control">
        <option selected>silder</option>
        <option>satique droit</option>
         <option>satique gauche</option>
          <option>carosselle</option>
           <option>page store</option>
      </select>
    </div>
 <!--  </div>
   <div class="form-row"> -->
    <div class="form-group col-md-6">
            <label for="">logo/image</label>
            <input  name='' type="file" class="form-control-file" id="inputPassword4" >
          </div>
    
  <!-- </div>
  <div class="form-row"> -->
    <div class="form-group col-md-6">
           
            <button type="submit" class="btn btn-lg btn-primary">Enregister</button>
     </div>
    
  </div>
 
</form>

</div>

@stop