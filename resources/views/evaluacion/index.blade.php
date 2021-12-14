@extends('layouts.app', ['activePage' => 'listaEvaluaciones', 'titlePage' => __('Dashboard')])
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <img class="img-uaeos-login" src="{{ asset('img/uaeos-logo.png') }}" alt="Imagen Logo UAEOS">
        <h1 class="h2">Evaluaciones</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
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
                            <a href="{{ route('components.show', $evaluacion = $evaluacion->idevaluacion) }}"
                                type="button" class="btn btn-success">Componentes</a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6"> No hay datos</td>

                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
@endsection
