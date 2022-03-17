<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use \DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
   public function __construct()
    {
        //$this->middleware('auth', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retornar a la vista index
        //return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Registrar un Usuario

        $rules = [
            'username' => 'required',
            'lastName' => 'required',
            'password' => [
                'required',
                Password::min(8) // Debe tener por lo menos 12 caracteres
                    ->mixedCase() // Debe tener mayúsculas + minúsculas
                    ->letters() // Debe incluir letras
                    ->numbers() // Debe incluir números
                    ->symbols(), // Debe incluir símbolos
            ],
        ];
        $messages = [
            'username.required' => 'Agrega el nombre.',
            'lastName.required' => 'Agrega el Apellido.',
            'password.required' => 'Agrega la contraseña.',
            'lastName.symbols' => 'Agrega Sinbolos.',

        ];
        $this->validate($request, $rules, $messages);

        $nombre = $request['username'];
        $apellido = $request['lastName'];
        $cuidad = $request['city'];
        $estado = $request['state'];
        $email = $request['emailAdress'];
        $numero = $request['phone'];
        $pass = $request['password'];

        $usuario = new User();
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellido;
        $usuario->cuidad = $cuidad;
        $usuario->estado = $estado;
        $usuario->email = $email;
        $usuario->numero = $numero;
        $usuario->password = Hash::make($pass);

        $usuario->save();

        return back()->with('success', 'Registro con éxito');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
