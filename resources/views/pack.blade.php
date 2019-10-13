@extends('layouts.master')

@section('content')

<div class="container" style="width: 800px; padding-top:100PX;padding-bottom:150PX">
<h2>Notre politique de pack hanoutek</h2>


<table class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>PACK</th>
        <th>AVANTAGE</th>
        <th>PRIX</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>pack Normale</td>
        <td>10 annonces</td>
        <td>500 DA</td>
      </tr>      
      <tr >
        <td>pack Moyen</td>
        <td>50 annonces</td>
        <td>2000 DA</td>
      </tr>
      <tr >
        <td>pack Top</td>
        <td>100 annonces</td>
        <td>3500 DA</td>
      </tr>
      
      
    </tbody>
  </table>



<h4>Pour s'inscrire a une de nos boutique hanoutek veullier vous inscrire sur le lien suivant et choisir boutique <a href="{{url('inscription')}}"> - inscription</a></h4>

</div>




@endsection