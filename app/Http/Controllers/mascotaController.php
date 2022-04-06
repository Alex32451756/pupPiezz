<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Models\Tipo;
class mascotaController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['only' => ['show', 'index']]);
        $this->middleware('verified');
        $this->middleware('auth', ['only' => ['mascota', 'show', 'cuidados']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function mascota()
    {
        //
        $tipos = Tipo::all();
        //$tipos = Mascota::join("tipo", "tipo.idTipo", "=", "mascota.idTipo")->select("tipo.nomTipo", "tipo.idTipo")->get();
        return View('components.mascota', compact('tipos'));
    }
    public function cuidados()
    {
        //
       
        return View('components.cuidados');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        if(empty($id)){
            return back()->with('error', 'Algo Salio Mal');
        }else{
            $detalles = Mascota::where('idMascota', $id)->get();
            return view('components.detalleMa', compact('detalles'));
        }
        
    }

    public function mascotasId(Request $request)
    {
        $idTipo = $request['idTipo'];
        if($idTipo == "chales"){
            $mascotas = Mascota::all();
            return response(json_encode($mascotas),200)->header('Content-type', 'text/plain');
        }
            $mascotas = Mascota::where('idTipo', $idTipo)->get();
            foreach ($mascotas as $mascota) {
                $mascotasArray[$mascota->idMascota] = $mascota->img;
            }
            return response(json_encode($mascotas),200)->header('Content-type', 'text/plain');
        
    }

    public function search(Request $request)
    {
        //$idTipo = $request['idTipo'];
        $term = $request->get('term');

        $querys = Mascota::where('nombre', 'LIKE', '%'.$term. '%')->get();

        $data = [];
        foreach($querys as $query){
            $data[]=[
                'label' => $query->nombre
            ];
        }

        return $data;
    }

    public function encontradas(Request $request)
    {
        $term = $request['search'];
       

        if(empty($term)){
            return back()->with('error', 'Algo Salio Mal');
        }else{
            $detalles = Mascota::where('nombre', 'LIKE', '%'.$term. '%')->get();
  
            
        if(sizeof($detalles) == 0){
                $bandera = 1;
                return view('components.detalleMa', compact('bandera'));
        }else{
            $bandera = 0;
            return view('components.detalleMa', compact('detalles', 'bandera'));
        }
            
        }


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
