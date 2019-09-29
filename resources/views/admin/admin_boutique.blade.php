@extends('layouts.admin')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md center"><h1> boutique sur le site </h1> </div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">

	<!-- recupére tout les boutique recent  de bdd -->

			<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom </th>
      <th scope="col">télépone</th>
      <th scope="col">adress</th>
      <th scope="col">pack</th>
      <th scope="col">statu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
	  <td>gold</td>
	  <!-- if (approve == 1) -->
	  <td>visible</td>
	  <!-- else  <td>visible</td> -->
      <td>
        <a href="{-- url('oneboutique/'.$boutique->id.'/') --}" class="btn btn-default">détails</a>
        <a href="{-- url('boutique/'.$boutique->id.'/edit') --}" class="btn btn-primary">éditer</a>
        <a href="{-- url('boutique/'.$boutique->id.'/') --}" class="btn btn-danger">supprimer</a>
      </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
     <td>gold</td>
	  <td>visible</td>
    <td>
        <a href="" class="btn btn-default">détails</a>
        <a href="" class="btn btn-primary">éditer</a>
        <a href="" class="btn btn-danger">supprimer</a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>gold</td>
	  <td>visible</td>
    <td>
        <a href="" class="btn btn-default">détails</a>
        <a href="" class="btn btn-primary">éditer</a>
        <a href="" class="btn btn-danger">supprimer</a>
      </td>
    </tr>
    		
  </tbody>
</table>
			
	</div>
</div>




@stop