<nav class="navbar navbar-expand-lg navbar-Dark bg-Dark" >
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="text">
          <li class="nav-item">
            <img src="{{ asset('img/pupPiezz.png') }}"  width="65px" height="50px" alt="..." class="img-thumbnail">
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/home')}}">Inicio</a>
          </li>

          <li class="nav-item">

            
            <a class="nav-link active" href="{{url('/mascotas')}}">Mascotas</a>
          </li> 

          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url("/cuidados")}}" aria-current="page">Cuidados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/contactanos')}}" aria-current="page">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="dropdown-item"
             href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                            <button  type="button" class="btn btn-danger">
                              {{ __('Logout') }}
                            </button>
              
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
             </form>
          </li>
        </ul>
        <!--<form class="d-flex">
         
          <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Buscador">
          <button class="btn btn-outline-success" type="submit">Buscador</button>
        </form>-->
        <div class="d-flex">
          @if (Auth::guest())
          <span class="badge badge-info">hola</span>
          @else
         
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>    
          @endif
          
        </div>
      </div>
    </div>
  </nav>
  <br>