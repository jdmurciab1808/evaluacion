@extends('layouts.app', ['activePage' => 'crearEvaluacion', 'titlePage' => __('Crear Evaluación')])
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    {{-- Header --}}
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
    {{-- Formulario Crear evaluacion --}}
    <div id="compromisoEvaluado">
        <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('evaluations.store') }}">
            @csrf
            {{-- <form class="row g-3 needs-validation" id="formCompromisoEvaluado" novalidate> --}}
                {{-- Firma --}}
                <div class="col-md-4">
                    <label for="firmaEvaluado" class="form-label">Compromiso de acuerdo</label>
                    <div class="form-check pt-1 px-5">
                        <input class="form-check-input" type="radio" name="firmaEvaluado" id="firmaEvaluado" required
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Si
                        </label>
                    </div>
                    <div class="invalid-feedback">
                        Debe aceptar el compromiso para crear la evaluacion
                    </div>
                </div>
                {{-- Ciudad --}}
                <div class="col-md-4">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <select class="form-select" id="ciudad" name="ciudad" required>
                        <option selected disabled value="">Seleccione una ciudad</option>
                        <option value="Arauca">Arauca</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <option value="Cali">Cali</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cúcuta">Cúcuta</option>
                        <option value="Florencia">Florencia</option>
                        <option value="Ibagué">Ibagué</option>
                        <option value="Leticia">Leticia</option>
                        <option value="Manizales">Manizales</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Mitú">Mitú</option>
                        <option value="Mocoa">Mocoa</option>
                        <option value="Montería">Montería</option>
                        <option value="Neiva">Neiva</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Pereira">Pereira</option>
                        <option value="Popayán">Popayán</option>
                        <option value="Puerto Carreño">Puerto Carreño</option>
                        <option value="Puerto Inírida">Puerto Inírida</option>
                        <option value="Quibdó">Quibdó</option>
                        <option value="Riohacha">Riohacha</option>
                        <option value="San Andrés">San Andrés</option>
                        <option value="San José del Guaviare">San José del Guaviare</option>
                        <option value="Santa Marta">Santa Marta</option>
                        <option value="Sincelejo">Sincelejo</option>
                        <option value="Tunja">Tunja</option>
                        <option value="Valledupar">Valledupar</option>
                        <option value="Villavicencio">Villavicencio</option>
                        <option value="Yopal">Yopal</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor selecciona una ciudad valida
                    </div>
                </div>
                {{-- Segundo Evaluador --}}
                <div class="col-md-4">
                    <label for="segundoEvaluador" class="form-label">Segundo evaluador</label>
                    <select class="form-select" name="segundoEvaluador" id="segundoEvaluador" required>
                        <option selected disabled value="">Seleccione su segundo evaluador</option>
                        @foreach ($admins as $admin)
                        <option value="{{ $admin->cc }}">{{ $admin->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Por favor seleccione un segundo evaluador
                    </div>
                </div>
                {{-- CCUser --}}
                <input type="text" id="users_cc" name="users_cc" hidden value="{{ Auth::user()->cc }}">
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
                    <button type="submit" class="btn btn-primary">Crear
                        Evaluación</button>
                </div>

            </form>
    </div>
    {{-- Formulario Crear Componentes de Evaluacion--}}
    <div id="componentesEvaluacion">
        <form class="row g-3" id="formComponentesEvaluacion" novalidate>
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
            <div class="col-md-6">
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
            <div class="col-md-6">
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
                <button class="btn btn-primary" id="crearEvaluacion">Crear Evaluación</button>
            </div>
        </form>
    </div>

</main>
@endsection
