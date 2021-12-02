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
                    <button  type="submit"class="btn btn-secondary ">Enviar</button>
                </div>
            </div>
            
        </form>









        
    @endsection
