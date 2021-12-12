@extends('layouts.app', ['activePage' => 'crearEvaluacion', 'titlePage' => __('Crear Evaluación')])
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <img class="img-uaeos-login" src="{{ asset('img/uaeos-logo.png') }}" alt="Imagen Logo UAEOS">
        <h1 class="h2">Crear Evaluacion</h1>
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
    {{-- Formulario --}}
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Firma</label>
            {{-- <input type="text" class="form-control" id="validationCustom03" required> --}}
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="validationCustom03">
            </div>
            <div class="invalid-feedback">
                Por favor adjunte archivo
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Ciudad</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Seleccione una ciudad</option>
                <option>Bogotá</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Segundo evaluador</label>
            <select class="form-select" id="validationCustom05" required>
                <option selected disabled value="">Seleccione su segundo evaluador</option>
                @foreach ($admins as $admin)
                <option value="{{ $admin->cc }}">{{ $admin->name }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Please provide a valid zip.
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
            <button class="btn btn-primary" type="submit">Crear Evaluación</button>
        </div>
    </form>
</main>
@endsection
