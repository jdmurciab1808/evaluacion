<?php

namespace App\Http\Controllers;

use App\Models\Componentes;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Component;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('componentes.componentes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('componente.create', [
            'admins' => Admin::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return  $request;
        $evaluation = $request['idevaluation'];
        Component::create([

            'meta' => $request['meta'],
            'funciones' => $request['funcion'],
            'evidencia' => $request['evidencia'],
            'cronograma' => $request['cronograma'],
            'acordado' => $request['acordado'],
            'cumplido' => $request['cumplido'],
            'evaluations_idevaluacion' => $request['idevaluation'],

        ]);
        return redirect()->route('components.show', $evaluation)->with('status', 'Se creo component con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('componente.create', [
            'admins' => Admin::all(),
            'componentes' => Component::where('evaluations_idevaluacion', $id)->get(),
            'evaluacion' => $id,
        ]);

        // $componentes = Component::where('evaluations_idevaluacion', $id)->get();
        // return $componentes;
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
