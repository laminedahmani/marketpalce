  
 <nav class="navbar navbar-inverse">  
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/')}}">Grossita</a>
    </div>


        
          
    <ul class="nav navbar-nav">
      @auth("boutique")
      <li class="active"><a href="   {{ url('boutique') }} ">ma boutique</a></li>
        <li><a href="{{ url('modifier/boutique/id=1')}}" >Mes information</a></li>
      @endauth
      @auth("membre")
      <li class="active"><a href="   {{ url('membre') }} ">ma boutique</a></li>
       <li><a href="{{ url('modifier/membre/id=1')}}" >Mes information</a></li>
      @endauth
     
    </ul>
    <ul class="nav navbar-nav">
       <li><a href="{{ url('ajout/produits')}}">Ajouté une annonce</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       @auth("boutique")
      <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::guard('boutique')->user()->nom }}    {{ Auth::guard('boutique')->user()->prenom }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('boutique.logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('boutique.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                              @endauth
							  
							       @auth("membre")
      <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::guard('membre')->user()->nom }}  {{ Auth::guard('membre')->user()->prenom }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('membre.logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form-2').submit();">
                                            Déconnecter
                                        </a>

                                        <form id="logout-form-2" action="{{ route('membre.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                              @endauth
    </ul>  
							  
    </ul>




  </div>




</nav> 