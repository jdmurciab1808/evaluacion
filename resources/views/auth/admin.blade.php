@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admins.store') }}">
                        @csrf
                        {{-- Cedula --}}
                        <div class="form-group row">
                            <label for="cc" class="col-md-4 col-form-label text-md-right">Cedula</label>
                            <div class="col-md-6">
                                <input id="cc" type="number" class="form-control" name="cc" required>
                            </div>
                        </div>
                        {{-- Nombre --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Contraseña --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Confirmación Contraseña --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        {{-- Cargo --}}
                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo</label>

                            <div class="col-md-6">
                                <select class="browser-default custom-select mg-lg-4 select-cargo" id="cargo" name="cargo">
                                    <option selected>Seleccione su Cargo</option>
                                    <option value="Asesor">Asesor</option>
                                    <option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
                                    <option value="Conductor Mecanico">Conductor Mecanico</option>
                                    <option value="Director Nacional">Director Nacional</option>
                                    <option value="Director Tecnico">Director Tecnico</option>
                                    <option value="Jefe De Oficina">Jefe De Oficina</option>
                                    <option value="Jefe Oficina Juridica">Jefe Oficina Juridica</option>
                                    <option value="Profesional Especializado">Profesional Especializado</option>
                                    <option value="Secretaria Ejecutiva">Secretaria Ejecutiva</option>
                                    <option value="Secretario">Secretario</option>
                                    <option value="Tecnico Administrativo">Tecnico Administrativo</option>
                                </select>
                            </div>
                        </div>
                        {{-- Dependecia --}}
                        <div class="form-group row">
                            <label for="dependencia" class="col-md-4 col-form-label text-md-right">Dependencia</label>
                            <div class="col-md-6">
                                <select class="browser-default custom-select mg-lg-4" name="dependencia" id="dependecia">
                                    <option selected>Seleccione su Dependencia</option>
                                    <option value="Grupo de Educación e Investigación">Grupo de Educación e
                                        Investigación</option>
                                    <option value="Grupo de Comunicaciones y Prensa">Grupo de Comunicaciones y Prensa
                                    </option>
                                    <option value="Grupo Tecnologías de la Información">Grupo Tecnologías de la
                                        Información</option>
                                    <option value="Grupo de Planeación y Estadística">Grupo de Planeación y Estadística
                                    </option>
                                    <option value="Dirección de Investigación y Planeación">Dirección de Investigación y
                                        Planeación</option>
                                    <option value="Oficina Control Interno">Oficina Control Interno</option>
                                    <option value="Grupo Gestión Humana">Grupo Gestión Humana</option>
                                    <option value="Grupo Gestión Administrativa">Grupo Gestión Administrativa</option>
                                    <option value="Despacho Subdirector Nacional">Despacho Subdirector Nacional</option>
                                    <option value="Dirección Nacional">Dirección Nacional</option>
                                    <option value="Oficina Asesoría Juridica">Oficina Asesoría Juridica</option>
                                    <option value="Grupo Gestión Financiera">Grupo Gestión Financiera</option>
                                    <option value="Dirección de Desarrollo de las Organizaciones Solidarias">Dirección
                                        de Desarrollo de las
                                        Organizaciones Solidarias</option>
                                    <option value="Grupo de Sinergias Interinstitucionales">Grupo de Sinergias
                                        Interinstitucionales</option>
                                    <option value="Grupo de Atención Especial a Poblaciones">Grupo de Atención Especial
                                        a Poblaciones</option>
                                    <option value="Grupo de Emprendimiento y Productividad">Grupo de Emprendimiento y
                                        Productividad</option>
                                    <option value="Grupo de Desarrollo Solidario">Grupo de Desarrollo Solidario</option>
                                </select>
                            </div>
                        </div>
                        {{-- Vacancia --}}
                        <div class="form-group row">
                            <label for="vacancia" class="col-md-4 col-form-label text-md-right">Vacancia</label>

                            <div class="col-md-6">
                                <select class="form-control" id="vacancia" name="vacancia">
                                    <option selected>Seleccione su vacancia</option>
                                    <option value="Vacancia Definitiva Por Surtir Concurso">Vacancia Definitiva Por
                                        Surtir Concurso</option>
                                    <option value="Vacancia Temporal">Vacancia Temporal</option>
                                    <option value="Vacancia Definitiva A Término Fijo">Vacancia Definitiva A Término
                                        Fijo</option>
                                </select>
                            </div>
                        </div>
                        
                        {{-- Boton --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
