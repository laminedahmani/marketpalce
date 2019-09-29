@extends('layouts.admin')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md center"><h1> les pubs sur le site </h1> </div>
	</div>


<a href="{{ url('admin/addpub')}}" class="btn btn-warning pull-right" style='margin-right:30px'>Ajouté une pub</a>
<table class="table table-hover table-dark">
 <thead>
  	<a href="#">
    <tr>
      <th scope="col">#</th>
      <th scope="col">titre</th>
      <th scope="col">lien</th>
      <th scope="col">date experation</th>
      <th scope="col">emplacement</th>
    </tr>
    </a>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
	  <td>gold</td>
	  
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
     <td>gold</td>
	 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>gold</td>
	 
    </tr>
    		
  </tbody>
</table>
</div>

@stop