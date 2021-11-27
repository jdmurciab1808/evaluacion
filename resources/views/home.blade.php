@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EVALUACION PARA FUNCIONARIOS PROVISIONALES') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    {{ __('1. IDENTIFICACIÓN GENERAL') }}
                </div>
                    
                <div class="flex">
                    <div class="flex-title">
                        <label for="full_name_id" class="control-label">NOMBRE COMPLETO</label>
                        <label for="full_doc_id" class="control-label">DOCUMENTO DE IDENTIDAD</label>
                        <label for="full_cargo_id" class="control-label">CARGO (DENOMINACIÓN-CÓDIGO-GRADO)</label>
                        <label for="full_dependencia_id" class="control-label">DEPENDENCIA</label>
                        </div>
                    <div class="form">
                        <form method="">
                            <label for="title-form">1.1 Empleado a Evaluar</label>
                            <div class="form-group"> <!-- Nombre Completo -->
                                <input type="text" class="form-control" id="full_name_id" name="nombre_completo" placeholder="Escribe tu nombre completo">
                            </div>    
                        
                            <div class="form-group"> <!-- Documento de Identidad -->
                                <input type="text" class="form-control" id="full_doc_id" name="documento" placeholder="Escribe tu Documento de Identidad">
                            </div> 

                            <div class="form-group"> <!-- Cargo -->
                                <input type="text" class="form-control" id="full_cargo_id" name="cargo" placeholder="Escribe el nombre interno del cargo">
                            </div> 

                            <div class="form-group"> <!-- Dependencia -->
                                <input type="text" class="form-control" id="full_dependencia_id" name="dependencia">
                            </div> 
                        </form>           
                    </div>
                    <div class="form">
                        <form>
                            <label for="title-form">1.2 Jefe Inmediato</label>
                            <div class="form-group"> <!-- Nombre Completo -->
                                <input type="text" class="form-control" id="full_name_id" name="nombre_completo" placeholder="Escribe tu nombre completo">
                            </div>    
                        
                            <div class="form-group"> <!-- Documento de Identidad -->
                                <input type="text" class="form-control" id="full_doc_id" name="documento" placeholder="Escribe tu Documento de Identidad">
                            </div> 

                            <div class="form-group"> <!-- Cargo -->
                                <input type="text" class="form-control" id="full_cargo_id" name="cargo" placeholder="Escribe el nombre interno del cargo">
                            </div> 

                            <div class="form-group"> <!-- Dependencia -->
                                <input type="text" class="form-control" id="full_dependencia_id" name="dependencia">
                            </div> 
                        </form>  
                    </div>
                    <div class="form">
                        <form>
                            <label for="title-form">1.3 Segundo Evaluador</label>
                            <div class="form-group"> <!-- Nombre Completo -->
                                <input type="text" class="form-control" id="full_name_id" name="nombre_completo" placeholder="Escribe tu nombre completo">
                            </div>    
                        
                            <div class="form-group"> <!-- Documento de Identidad -->
                                <input type="text" class="form-control" id="full_doc_id" name="documento" placeholder="Escribe tu Documento de Identidad">
                            </div> 

                            <div class="form-group"> <!-- Cargo -->
                                <input type="text" class="form-control" id="full_cargo_id" name="cargo" placeholder="Escribe el nombre interno del cargo">
                            </div> 

                            <div class="form-group"> <!-- Dependencia -->
                                <input type="text" class="form-control" id="full_dependencia_id" name="dependencia">
                            </div> 
                        </form>  
                    </div>
                  </div>
                  <div class="btn_submit"> <!-- Enviar formulario -->
                    <button type="submit" class="btn btn-primary">Siguiente!</button>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
