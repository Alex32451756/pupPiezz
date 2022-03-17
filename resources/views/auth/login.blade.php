<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>


  </head>
  <body>
  

    <div class="container">
      <section id="formHolder">
    
        <div class="row">
    
          <!-- Brand Box -->
          <div class="col-sm-6 brand">
            <a href="#" class="logo">PupPiezz <span>.</span></a>
    
            <div class="heading">
              <img src="{{asset('img/pupPiezz.png')}}" class="img-thumbnail" alt="...">
              <p>HOLA....!!!</p>
            </div>
    
            <div class="success-msg">
              <p>Great! You are one of our members now</p>
              @if(session('success'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  {{session('success')}}
              </div>
            @endif
            @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <p>Corrige los siguientes errores:</p>
                      <ul>
                          @foreach ($errors->all() as $message)
                              <li>{{ $message }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              
            </div>
          </div>
    
          <!-- Form Box -->
          <div class="col-sm-6 form">
    
            <!-- Login Form -->
            <div class="login form-peice switched">
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                  <label for="loginemail">Email</label>
                  <input type="email" name="email" id="email" required>
                </div>
    
                <div class="form-group">
                  <label for="loginPassword">Password</label>
                  <input type="password" name="password" id="password" required>
                </div>

    
                <div class="CTA">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                  <a href="#" class="switch">Registro</a>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
              </form>
            </div><!-- End Login Form -->
    
            <!-- Signup Form -->
            <div class="signup form-peice">
              <form action="{{ url('/resgistro')}}" method="post" enctype="multipart/form-data">
                @csrf
               

                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" name="username" id="name" class="name">
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <label for="last">Apellidos</label>
                  <input type="text" name="lastName" id="last" class="last" required>
                  <span class="error"></span>
                </div>

                <div class="row g-3">
                  <div class="col">
                    <div class="form-group">
                      <label for="city">Cuidad</label>
                      <input type="text" name="city" id="city" class="city" required>
                      <span class="error"></span>
                    </div>
                  </div>
                  <div class="col">
                   
                <div class="form-group">
                  <label for="state">Estado</label>
                  <input type="text" name="state" id="state" class="state" required>
                  <span class="error"></span>
                </div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="emailAdress" id="email" class="email" required>
                  <span class="error"></span>
                </div>
    
                <div class="form-group">
                  <label for="phone">Número - <small>Optional</small></label>
                  <input type="text" name="phone" id="phone" required>
                </div>

                <div class="row g-3">
                  <div class="col">
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="pass" required>
                      <span class="error"></span>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="passwordCon">Confirm Password</label>
                      <input type="password" name="passwordCon" id="passwordCon" class="passConfirm" required>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
  
    

    
                <div class="CTA">
                  <input type="submit" value="Regístrate ahora" id="submit">
                  <a href="#" class="switch">Login</a>
                </div>
              </form>
            </div><!-- End Signup Form -->
          </div>
        </div>
    
      </section>
    
      <footer>
        <p>
          Form made by: <a href="" target="_blank">Alejandro/Carolina</a>
        </p>
      </footer>
    
    </div>



    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
