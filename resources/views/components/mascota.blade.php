@extends('layouts.master')

@section('header')
<style>
    body{
    background-color: #D6B47C;
  }
</style>
<title>Mascotas</title>
<link href="{{ asset('css/fooder.css') }}" rel="stylesheet">

@endsection

@section('navar')  
@endsection

@section('content')
<div class="container" >
    <div class="row">
      <div class="col">
        <select class="form-select" aria-label="Default select example">
            <option selected>Tipos de Animal</option>
            <option value="1">Perro</option>
            <option value="2">Gato</option>
            <option value="3">Vaca</option>
          </select>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      <div class="col">
        <h6>Tamaño</h6>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Grande
        </label>
      </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            Mediano
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
          <label class="form-check-label" for="flexRadioDefault3">
            Pequeño
          </label>
        </div>
      </div>

      <div class="col">
                <h6>Pelaje</h6>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Largo
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            Mediano
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
          <label class="form-check-label" for="flexRadioDefault3">
            Corto
          </label>
        </div>
      </div>
    </div>
  </div>


<!--Consultar mascotas-->
<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom text-center">Mascotas</h2>


  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">


    <div class="feature col text-center">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset("img/perrito.jpg")}}" alt="Card image cap">
        <div class="card-body" style="background-color: #5ce3e5;">
            <button type="button" style="width: 200px; background-color: #063970" class="btn btn-primary">Ver</button>
        </div>
      </div>
    </div>

    <div class="feature col text-center">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset("img/perrito.jpg")}}" alt="Card image cap">
        <div class="card-body" style="background-color: #5ce3e5;">
            <button type="button" style="width: 200px; background-color: #063970" class="btn btn-primary">Ver</button>
        </div>
      </div>
    </div>




  </div>
</div>


@endsection

@section('fooder')
    
@endsection