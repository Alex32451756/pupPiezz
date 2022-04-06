<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['only' => ['show', 'index']]);
    
        $this->middleware('auth', ['only' => ['contacto']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function contacto()
    {
        //
        return View('components.contactanos');
    }

    public function all()
    {
        //
        return "hola";
    }

    public function mensaje()
    {
        //
        return View('components.contactonos');
    }

}
