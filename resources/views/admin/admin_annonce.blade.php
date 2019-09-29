@extends('layouts.admin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md center"><h1> annonce qur le site </h1> </div>
	</div>
</div>
<div class="container">
	<div class="row">

	<!-- recupére tout les boutique recent  de bdd -->

			<table class="table table-hover table-dark">
  <thead>
  	<a href="#">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom </th>
      <th scope="col">télépone</th>
      <th scope="col">adress</th>
      <th scope="col">pack</th>
      <th scope="col">statu</th>
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
	  <!-- if (approve == 1) -->
	  <td>visible</td>
	  <!-- else  <td>visible</td> -->
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
     <td>gold</td>
	  <td>visible</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>gold</td>
	  <td>visible</td>
    </tr>
    		
  </tbody>
</table>


@stop