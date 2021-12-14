<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Evaluation;



class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('evaluacion.index', [
        //     'evaluaciones' => Evaluation::with('users')->get()
        // ]);

        $evaluaciones = Evaluation::all();
        return $evaluaciones;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluacion.create', [
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
        // $fecha = date('Y-m-d');
        // return $request;

        $user_cc = $request['users_cc'];
        Evaluation::create([

            'fechaIncio' => date('Y-m-d'),
            'estado' => 'Iniciada',
            'firmaEvaluado' =>  $request['firmaEvaluado'],
            'ciudad' => $request['ciudad'],
            'evaluador_dos' => $request['segundoEvaluador'],
            'users_cc' => $request['users_cc'],

        ]);
        return redirect()->route('evaluations.show', $user_cc)->with('status', 'Se creo Evaluacion con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_cc)
    {

        // $evaluaciones = Evaluation::where('users_cc', $user_cc)->with('user')->get();
        // return $evaluaciones;
        return view('evaluacion.index', [
            'admins' => Admin::all(),
            'evaluaciones' => Evaluation::where('users_cc', $user_cc)->with('user')->get()
        ]);
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
