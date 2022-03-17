@extends('layouts.master')

@section('header')
<title>Prueba</title>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
  

@endsection

@section('navar')  
@endsection

@section('content')  
<div class="container">
  <!-- Content here -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/animal.jpg') }}" class="d-block w-100" alt="..." width="100%" height="450px">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/PerrosyGatos.jpg') }}" class="d-block w-100" alt="..." width="100%" height="450px">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/pupPiezz.png') }}" class="d-block w-100" alt="..." width="100%" height="450px">
      </div>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="card">
    <div class="card-body">
      <p>
        <h3 style="text-align: center">Mascotas en adopción: beneficios y requisitos para adoptar un perro o gato</h3>

        A través de la historia, las mascotas han sido grandes compañeras de la vida de las personas, compartiendo alegrías, pero también ayudando a superar momentos difíciles.

Adoptar es un gran paso. Hay muchos aspectos que debes considerar previamente, desde elegir el tipo de mascota más adecuada para tu estilo de vida, hasta decidir dónde o con quién adoptar. Por eso queremos ayudarte para que ésta sea una de las mejores experiencias en tu vida y la de tu próximo amigo de cuatro patas.

Ante todo, debes tomar en cuenta la gran responsabilidad que representa tener a un animal de compañía dentro de tu vida, ya que desafortunadamente es común que algunos dueños que adquieren un cachorro o un gatito, de forma impulsiva decidan abandonarlo. Esto sucede por lo regular cuando se dan cuenta del compromiso a largo plazo que implica vivir con una mascota.

Una vez estando consciente de esto, ahora sí, veamos estos cinco puntos para empezar con un proceso de adopción de mascotas.
      </p>
    </div>

  </div>
</div>
<br>
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-center">Algunas mascotas en adopción</h2>


    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">


      <div class="feature col text-center">
        <div class="card" style="width: 18rem;" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <img class="card-img-top" src="{{asset("img/perrito.jpg")}}" alt="Card image cap">
          <div class="card-body" style="background-color: #5ce3e5;">
              <button type="button" style="width: 200px; background-color: #063970" class="btn btn-primary">Ver</button>
          </div>
        </div>
      </div>

      <div class="feature col text-center">
        <div class="card" style="width: 18rem;" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <img class="card-img-top" src="{{asset("img/perrito.jpg")}}" alt="Card image cap">
          <div class="card-body" style="background-color: #5ce3e5;">
              <button type="button" style="width: 200px; background-color: #063970" class="btn btn-primary">Ver</button>
          </div>
        </div>
      </div>




    </div>
  </div>
</div>

@endsection

@section('fooder')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@endsection