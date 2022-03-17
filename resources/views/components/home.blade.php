@extends('layouts.master')

@section('header')
<title>home</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  
<link rel="stylesheet" href="{{asset('css/maicons.css')}}">

<link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">

<link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.carousel.css')}}">

<link rel="stylesheet" href="{{asset('vendor/fancybox/css/jquery.fancybox.css')}}">

<link rel="stylesheet" href="{{asset('css/theme.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
/* Importación de fuentes de google fonts */ 



/* creado por javiniguez.com, Julio 2019 */
</style>
@endsection

@section('navar')  
@endsection

@section('content')


<header>
  <div id="carouselExampleIndicators" class="carousel slide" style="padding: 15px" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/animal2.jpg') }}" class="rounded mx-auto d-block"   width="1300px" height="550px" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/PerrosyGatos.jpg') }}" class="rounded mx-auto d-block"  width="1300px" height="550px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/pupPiezz.png') }}" class="rounded mx-auto d-block" width="1300px" height="550px" alt="..." >
      </div>
    </div>
    </div>
    <button class="carousel-control-prev" style="height: 40px; margin-top: 400px" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" style="height: 40px; margin-top: 400px" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>
<main>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       @csrf
    </form>
  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <div class="subhead">Conoce</div>
          <h2 class="title-section">Porque es mejor <span class="fg-primary">Adoptar</span> que comprar</h2>

          <p style="color: whitesmoke">Mascotas en adopción: beneficios y requisitos para adoptar un perro o gato</h3>

            A través de la historia, las mascotas han sido grandes compañeras de la vida de las personas, compartiendo alegrías, pero también ayudando a superar momentos difíciles.
    
    Adoptar es un gran paso. Hay muchos aspectos que debes considerar previamente, desde elegir el tipo de mascota más adecuada para tu estilo de vida, hasta decidir dónde o con quién adoptar. Por eso queremos ayudarte para que ésta sea una de las mejores experiencias en tu vida y la de tu próximo amigo de cuatro patas.
    
    Ante todo, debes tomar en cuenta la gran responsabilidad que representa tener a un animal de compañía dentro de tu vida, ya que desafortunadamente es común que algunos dueños que adquieren un cachorro o un gatito, de forma impulsiva decidan abandonarlo. Esto sucede por lo regular cuando se dan cuenta del compromiso a largo plazo que implica vivir con una mascota.
    
    Una vez estando consciente de esto, ahora sí, veamos estos cinco puntos para empezar con un proceso de adopción de mascotas.</p>

          <a href="about.html" class="btn btn-primary mt-4">Read More</a>
        </div>
        <div class="col-lg-6 py-3">
          <div class="about-img" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
            <img src="{{asset('img/animal2.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->

  

  <div class="page-section">
    <div class="container">
      <div class="text-center">
        <div class="subhead">Disponibles</div>
        <h2 class="title-section">Buscan un lindo hogar</h2>
      </div>

      <div class="row my-5 card-blog-row">
        @foreach ($mascotas as $mascota)
        <div class="col-lg-3 py-3">
          <div class="feature col text-center">
              <div class="card" style="width: 18rem;" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <img class="card-img-top" src="{{$mascota->img}}" height="250px" alt="Card image cap">
                  <div class="card-body" style="background-color: #5ce3e5;">
                      <a href="{{url('/detalleM',['id'=>$mascota->idMascota])}}"><button type="button" style="width: 200px; height: 40px; background-color: #063970" class="btn btn-primary">Ver</button></a>
                  </div>
              </div>
            </div>
          </div>
          @endforeach

      </div>
      <div class="d-flex justify-content-end">
        {!! $mascotas->links() !!}
      </div>

      <div class="text-center">
        <a href="blog.html" class="btn btn-primary">Ver Más</a>
      </div>

    </div> <!-- .container -->
  </div> <!-- .page-section -->

 
</main>
@endsection

@section('fooder')
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('vendor/fancybox/js/jquery.fancybox.min.js')}}"></script>

<script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>

<script src="{{asset('js/google-maps.js')}}"></script>

<script src="{{asset('js/theme.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@endsection