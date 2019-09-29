 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href='{{ url("/")}}'>Grossita</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href='{{ url("admin/boutique")}}'>Boutique </a></li>
      <li><a href='{{ url("admin/particulier")}}'>Particulier </a></li>
      <li><a href='{{ url("admin/annonce")}}'>Annonce </a></li>
    </ul>
    <ul class="nav navbar-nav">
       <li><a href='{{ url("admin/pubs")}}'>Pubs</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="fa fa-user"></span>Déconnecté</a></li>
    </ul>
  </div>
</nav> 