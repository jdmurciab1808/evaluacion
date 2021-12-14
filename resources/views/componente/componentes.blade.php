@extends('layouts.admin')
<div class="contenedor">
    <div class="img-uaeos">
        @section('content')
        <img src="{{ asset('img/uaeos-logo.png') }}" alt="">
        <h2 class="title-home">COMPONENTES DE LA EVALUACIÓN</h2>
    </div>


    <div class="textoHeader">
        <p>Formulario Componentes de la Evaluación</p>
    </div>
    <form method="post" action="">

        <div class="inputs">
            <div class="d-flex flex-column border border-dark rounded py-2">
                <div class="d-flex flex-row col">
                    <div class="form-group col-4">
                        <p>Metas</p>
                        <input type="text" id="meta" class="form-control" placeholder="Escribe tu Meta.">
                    </div>
                    <div class="form-group col-4">
                        <p>Funciones</p>
                        <input type="text" id="funciones" class="form-control" placeholder="Escribe tu Función.">
                    </div>
                    <div class="form-group col-4">
                        <p>Evidencias</p>
                        <input type="file">
                    </div>
                </div>
                <div class="d-flex flex-row col">

                    <div class="form-group col-4 ">
                        <p>Acordardo</p>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <p>Cumplido</p>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <p>Sujeto a Cronograma</p>
                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="0">
                            <label class="custom-control-label" for="0"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-3">
            <div class="d-flex justify-content-between col">
                <button type="button" onclick="nuevo();" class="btn btn-primary ">Agregar</button>
                <button type="submit" class="btn btn-secondary ">Enviar</button>
            </div>
        </div>

    </form>

    <div class="table-responsive">
        <table id="userTable" class="table table-striped text-center" style="width:100%">
            <thead class=" text-primary">
                <tr>
                    <th>Fecha Incio</th>
                    <th>Estado</th>
                    <th>Firma Evaluado</th>
                    <th>Firma Evaluador</th>
                    <th>Firma Segundo Evaluador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($evaluaciones as $evaluacion)
                <tr>
                    <td>{{ $evaluacion->fechaIncio }}</td>
                    <td>{{ $evaluacion->estado }}</td>
                    <td>{{ $evaluacion->firmaEvaluado }}</td>
                    <td>{{ $evaluacion->firmaEvaluador }}</td>
                    <td>{{ $evaluacion->firmaSegundoEvaluado }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-danger">Borrar</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <a href="{{ route('components.show', $user_cc = Auth::user()->cc) }}" type="button"
                                class="btn btn-success">Componentes</a>
                        </div>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>










    @endsection
