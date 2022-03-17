@extends('layouts.master')

@section('header')
<title>Cantacto</title>
<style>
/* Importación de fuentes de google fonts */ 
@import url(https://fonts.googleapis.com/css?family=Noto+Sans);


body{
height: 100%; 
font-family: 'Noto Sans', sans-serif;
  background-color: #ab4493; 
}


.contact_form{
width: 460px; 
  height: auto;
  margin: 80px auto;
border-radius: 10px;  
padding-top: 30px;
padding-bottom: 20px;  
  background-color: #fbfbfb; 
  padding-left: 30px; 
}


input{
background-color: #fbfbfb; 
width: 408px; 
height: 40px; 
border-radius: 5px;  
border-style: solid; 
border-width: 1px; 
border-color: #ab4493; 
margin-top: 10px;  
padding-left: 10px;
  margin-bottom: 20px; 
}


textarea{
  background-color: #fbfbfb; 
width: 405px; 
height: 150px; 
border-radius: 5px;  
border-style: solid; 
border-width: 1px; 
border-color: #ab4493; 
margin-top: 10px;  
padding-left: 10px;
  margin-bottom: 20px; 
  padding-top: 15px; 
}


label{
  display: block; 
float: center; 
}


#button2{
height: 45px; 
padding-left: 5px;
padding-right: 5px; 
margin-bottom: 20px; 
margin-top: 10px; 
text-transform: uppercase;
background-color: #ab4493; 
border-color: #ab4493; 
border-style: solid; 
border-radius: 10px;
width: 420px;   
  cursor: pointer;
}


button p{
color: #fff; 
}


span{
color: #ab4493; 
}


.aviso{
font-size: 13px;  
color: #0e0e0e;  
}


h1{
font-size: 39px;  
text-align: letf; 
padding-bottom: 20px; 
color: #ab4493;
}


h3{
font-size: 16px; 
padding-bottom: 30px;
color: #0e0e0e;   
}


p{
font-size: 14px; 
color: #0e0e0e; 
}


::-webkit-input-placeholder {
 color: #a8a8a8;
}


::-webkit-textarea-placeholder {
 color: #a8a8a8;
}


.formulario input:focus{
outline:0;
border: 1px solid #97d848;
}


.formulario textarea:focus{
outline:0;
border: 1px solid #97d848;
}


/* creado por javiniguez.com, Julio 2019 */
</style>
@endsection

@section('navar')  
@endsection

@section('content')
<div class="container">
    <h2 clas="align-items-center" style="text-align: center">Contáctanos</h2>
    <img class="rounded mx-auto d-block" src="{{asset("img/perrito.jpg")}}" alt="Gargando...." style="padding: 10px; border-radius: 50px" width="400px" height="400px">
    <br>  
    <div class="accordion" id="accordionExample">
    <div class="card">
    <div class="card-header" id="headingOne">
    <h2 class="mb-0">
        <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Télefonos
        </button>
    </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
    <div class="card-body">
        4180000000
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-header" id="headingTwo">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Correos
        </button>
    </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <div class="card-body">
    PupPiezz@gmail.com.
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- formulario de contacto en html y css -->  

<div class="contact_form">

    <div class="formulario">
          <h1>Formulario de contacto</h1>
    <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
    
    
    <form action="submeter-formulario.php" method="post">
    
    
    <p>
    <label for="nombre" class="colocar_nombre">Nombre
    <span class="obligatorio">*</span>
    </label>
    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
    </p>
    
    <p>
    <label for="email" class="colocar_email">Email
    <span class="obligatorio">*</span>
    </label>
    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
    </p>
    
    <p>
    <label for="telefone" class="colocar_telefono">Teléfono
    </label>
    <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
    </p>
    
    <p>
    <label for="asunto" class="colocar_asunto">Asunto
    <span class="obligatorio">*</span>
    </label>
    <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
    </p>
    
    <p>
    <label for="mensaje" class="colocar_mensaje">Mensaje
    <span class="obligatorio">*</span>
    </label>                     
     <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
    </p>  
    
    <button type="submit" class="btn btn-info" name="enviar_formulario" id="button2"><p>Enviar</p></button>
    
    <p class="aviso">
    <span class="obligatorio"> * </span>los campos son obligatorios.
    </p>
    
    </form>
    </div>
    </div>
</div>

@endsection

@section('fooder')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection