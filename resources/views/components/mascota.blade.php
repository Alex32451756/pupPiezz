@extends('layouts.master')

@section('header')
<style>
    body{
    background-color: #D6B47C;
  }
</style>
<title>Mascotas</title>
<link href="{{ asset('css/fooder.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('vendor/jquery-ui.min.css')}}">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection

@section('navar')   
@endsection

@section('content')
<div class="position-absolute top-35 start-50 translate-middle" style="width: auto">
  {{ Breadcrumbs::render('mascota') }}
</div>
<br><br><br>
@if(session('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{session('error')}}
</div>
@endif
<header>
<div class="container" >
    <div class="row">
      <div class="col">
        <select class="form-select" name="tipo" id="tipo" aria-label="Default select example">
          <option value="chales" selected>Tipos de Animal</option>
          @foreach ($tipos as $tipo)
          <option value="{{$tipo->idTipo}}" {{ old('idTipo') == $tipo->idTipo ? 'selected' : '' }}>{{$tipo->nomTipo}}</option> 
          @endforeach
          </select>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      <div class="col">
        <div>
          <form class="d-flex" action="{{ route('encontrados') }}" method="POST">
            @csrf
            <input class="form-control me-2" id="search"  name="search" type="text" placeholder="Buscador" aria-label="Buscador">
            <button class="btn btn-outline-success" type="submit">Buscador</button>
          </form>
          </div>
      </div>

      

      


<!--Consultar mascotas-->
<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom text-center">Mascotas</h2>


  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

    <div id="contenido" name="contenido" class="feature col text-center"> 

  
    </div>

  <!--  <div class="feature col text-center">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset("img/perrito.jpg")}}" alt="Card image cap">
        <div class="card-body" style="background-color: #5ce3e5;">
            <button type="button" style="width: 200px; background-color: #063970" class="btn btn-primary">Ver</button>
        </div>
      </div>
    </div>-->




  </div>
</div>


@endsection

@section('fooder')

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--jQuery UI-->

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{asset('vendor/jquery-ui.min.js')}}"></script>


<script type = "text/javascript">
  $(document).ready(function () {
      function loadCareer() {
          var idTipo = $('#tipo').val();
        
          console.log(idTipo);
          if ($.trim(idTipo) != '') {
              $.ajax({
                  url: "mascota/all",
                  method: 'POST',
                  data:{
                      idTipo: idTipo,
                      _token:$('input[name="_token"]').val()
                  }
              }).done(function(res){ 
                  var arreglo = JSON.parse(res);
                  if(arreglo == 0){
                    $('#contenido').empty();
                  $('#contenido').append("<h1>Seleccione Un Tipo de Mascota</h1>");
                  }
                  console.log(arreglo);
                  $('#contenido').empty();
                  for (let x = 0; x < arreglo.length; x++) {
                      $('#contenido').append("<img class='card-img-top' src='" +  arreglo[x].img + "' alt='Card image cap'>");
                      $('#contenido').append("<div class='card-body' style='background-color: #5ce3e5;'>");
                      $('#contenido').append("<button type='button' style='width: 200px; height: 40px; background-color: #073775' class='btn btn-primary'>Ver</button>");
                        $('#contenido').append("</div>");
                      $('#contenido').append("</div>");

                  }
                  console.log(arreglo);
              })
          }
      }
      loadCareer();
      $('#tipo').on('change', loadCareer);
  });
</script>
<script>
    

  $('#search').autocomplete({
    source: function(request, respose){
      $.ajax({
        url: 'search/mascota',
        dataType: 'json',
        method: 'GET',
          data:{
             term: request.term
            //_token:$('input[name="_token"]').val()
          },
          success: function(data){
            respose(data)
          }
      });

    }
});

</script>



@endsection