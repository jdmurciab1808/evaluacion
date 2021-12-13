@extends('layouts.app', ['activePage' => 'listaEvaluaciones', 'titlePage' => __('Crear Evaluación')])
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    {{-- Header --}}
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <img class="img-uaeos-login" src="{{ asset('img/uaeos-logo.png') }}" alt="Imagen Logo UAEOS">
        <h1 class="h2">Crear Componentes de Evaluacion</h1>
    </div>
    {{-- Formulario Crear Componentes de Evaluacion--}}
    <div id="componentesEvaluacion">
        <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('components.store') }}">
            @csrf
            {{-- Firma --}}
            <div class="col-md-4">
                <label for="meta" class="form-label">Meta</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Meta</span>
                    <input type="text" class="form-control" placeholder="Escriba la meta" aria-label="meta"
                        aria-describedby="addon-wrapping" id="meta" name="meta" required>
                </div>
                <div class="invalid-feedback">
                    Ingrese la meta de este componente
                </div>
            </div>
            {{-- Funcion --}}
            <div class="col-md-4">
                <label for="funcion" class="form-label">Funcion</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Funcion</span>
                    <input type="text" class="form-control" placeholder="Escriba la funcion de la meta"
                        aria-label="meta" aria-describedby="addon-wrapping" id="funcion" name="funcion" required>
                </div>
                <div class="invalid-feedback">
                    Por favor escriba la funciona que compone la meta
                </div>
            </div>
            {{-- Evidencia --}}
            <div class="col-md-4">
                <label for="evidencia" class="form-label">Evidencias</label>
                <div class="form-check pt-1 px-5">
                    <input class="form-check-input" type="radio" name="evidencia" id="evidencia" required checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Si
                    </label>
                </div>
                <div class="invalid-feedback">
                    Por favor marque si cuenta con evidencias
                </div>
            </div>
            {{-- Cronograma --}}
            <div class="col-md-4">
                <label for="cronograma" class="form-label">Cronograma</label>
                <div class="form-check pt-1 px-5">
                    <input class="form-check-input" type="radio" name="cronograma" id="cronograma" required checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Si
                    </label>
                </div>
                <div class="invalid-feedback">
                    Por favor marque si esta sujeto a cronograma
                </div>
            </div>
            {{-- Acrodado --}}
            <div class="col-md-4">
                <label for="acordado" class="form-label">Porcentaje Acordado para esta meta</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">%</span>
                    <input type="number" class="form-control" placeholder="20" aria-label="meta"
                        aria-describedby="addon-wrapping" id="acordado" name="acordado" required>
                </div>
                <div class="invalid-feedback">
                    Digite el % acordado para esta meta
                </div>
            </div>
            {{-- Acrodado --}}
            <div class="col-md-4">
                <label for="cumplido" class="form-label">Porcentaje cumplido</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">%</span>
                    <input type="number" class="form-control" placeholder="20" aria-label="meta"
                        aria-describedby="addon-wrapping" id="cumplido" name="cumplido" required>
                </div>
                <div class="invalid-feedback">
                    Digite el % acordado para esta meta
                </div>
            </div>
            {{-- Condiciones --}}
            {{-- <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div> --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary" id="crearEvaluacion">Crear Componente</button>
            </div>
        </form>
    </div>

</main>
@endsection
