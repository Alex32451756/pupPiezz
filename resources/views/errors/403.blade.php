@extends('errors::minimal')

@section('code', '403')
@section('title', __('No permitido'))

@section('message', __('ESTA ACCIÓN NO ESTÁ AUTORIZADA CONSULTA CON TU ADMINISTRADOR.'))
@section('image')
<div class="container" style="margin-left: 400px">
    <h1 style="font-size: 120px">403</h1>
     <h2>ESTA ACCIÓN NO ESTÁ AUTORIZADA CONSULTA CON TU ADMINISTRADOR.</h2>
    <img src="{{asset('img/pupPiezz.png')}}" class="img-fluid" alt="...">
</div>
