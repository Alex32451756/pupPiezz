@extends('layouts.master')

@section('header')
<title>Detalle</title>
@endsection

@section('navar')  

@endsection

@section('content')
<div class="position-absolute top-35 start-50 translate-middle" style="width: auto">
 
  {{ Breadcrumbs::render('detalleM') }}
</div>
<br>
<div class="container-fluid">
    <h1 class="text-center">Detalles de la Mascota Sellecionada</h1>
    <div class="">
      
      @if($bandera == 1)
          <h1 class="text-center" style="color: white;">Lo siento no encontramos resultados de tu busquedad...</h1>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      @else
      @foreach ($detalles as $detalle)
      <div class="col d-flex justify-content-center align-items-center" style="padding-left: 200px; padding-right: 200px; ">
          <img class="border border-secondary" src="{{$detalle->img}}" alt="" style="padding: 10px; border: 5px, solid, black;" width="400px" height="400px">
        <div >
          <div class="card-body"  >
              <div class="card" style="background-color: #fcf4e4;" >
                  <div class="input-group " style="margin: 1rem;
                      padding: 1rem;">
                      <span class="input-group-text">Nombre :</span>
                      <input type="text" aria-label="nombre" value="{{$detalle->nombre}}" style="" class="form-control">
                      &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp; &nbsp; &nbsp;
                      <span class="input-group-text">Edad: </span>
                      <input type="text" aria-label="edad" value="{{$detalle->edad}}"  class="form-control">
                   </div>
                <div class="input-group" style="padding-left: 32px">
                  <span class="input-group-text">Discapacidades: </span>
                  <input type="text" aria-label="des" value="{{$detalle->discapa}}" class="form-control">

                </div>
                <div class="input-group " style="margin: 1rem;
                padding: 1rem;">
                <span class="input-group-text">Tamaño :</span>
                <input type="text" aria-label="nombre" value="{{$detalle->tamano}}" style="" class="form-control" readonly>
                &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp; &nbsp; &nbsp;
                <span class="input-group-text">Pelaje: </span>
                <input type="text" aria-label="pelaje" value="{{$detalle->pelaje}}"  class="form-control">
             </div>

           
                <div class="form-floating" style="padding: 10px">
                  <textarea class="form-control" name="" placeholder="Leave a comment here" id="floatingTextarea">{{$detalle->descripcion}}</textarea>
                  <label for="floatingTextarea">Decripción</label>


                  <br>

                  <button type="button" style="width: 200px; font-size: 24px" class="btn btn-outline-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"></path>
                    </svg>
                    Adoptar
                  </button>
                </div>
                

              </div>

          </div>
      </div>

      </div>
      @endforeach
      @endif
      

    </div>

</div>
</div>
<br><br>
@endsection

@section('fooder')
    
@endsection