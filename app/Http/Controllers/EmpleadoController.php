<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\JefeInmediato;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        // $texto=trim($request->get('texto'));
        // $empleados=DB::table('empleado')
        //             ->select('id', 'nombreCompleto', 'tipoyDocumento', 'cargo', 'dependencia')
        //             ->where('nombreCompleto', 'LIKE', '%'.$texto.'%')
        //             ->orWhere('tipoyDocumento', 'LIKE', '%'.$texto.'%')
        //             ->orderBy('nombreCompleto', 'desc')
        //             ->paginate(10);
        // return view('empleado.index', compact('empleados', 'texto'));
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
        // $carga = Empleado::create([
        //     "nombreCompleto" => $request['nombreCompleto'],
        //     "tipoyDocumento" => $request['tipoyDocumento'],
        //     'cargo' => $request['cargo'],
        //     'dependencia' => $request['dependencia'],
        // ]);
        // $datosJefe = JefeInmediato::create([
        //     "nombreCompletoJefe"=> $request['nombreCompletoJefe'],
        //     "tipoyDocumentojefe"=> $request['tipoyDocumentojefe'],
        //     "cargoJefe"=> $request['cargoJefe'],
        //     "dependenciaJefe"=> $request['dependenciaJefe'],
        // ]);

    
        // if($carga or $datosJefe){
        //     return "carga exitosa";
        // }else{
        //     return "error";
        // }
        var_dump ($request);

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
