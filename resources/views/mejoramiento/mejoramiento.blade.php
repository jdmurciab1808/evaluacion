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
        
        <h2 class="fs-title"><b>5. MEJORAMIENTO Y DESARROLLO</b></h2>
      <div class="row m-0">
        <div class="col-xs-12 col-md-6">
          <label for="metas" class="text-title">Fortalezas:</label>
          <div class="form-group">
            <div class="input-group col-12 m-0 p-0 mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text num-input">1</span>
              </div>
              <input id="metas" type="text" name="metas"
                  class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
            </div>
            <div class="input-group col-12 m-0 p-0 mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text num-input">2</span>
              </div>
              <input id="metas" type="text" name="metas"
                  class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
            </div>
            <div class="input-group col-12 m-0 p-0 mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text num-input">3</span>
              </div>
              <input id="metas" type="text" name="metas"
                  class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
            </div>
            <div class="input-group col-12 m-0 p-0 mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text num-input">4</span>
              </div>
              <input id="metas" type="text" name="metas"
                  class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <label for="funciones" class="text-title">Aspectos a Mejorar</label>
          <div class="form-group">
            <div class="input-group col-12 m-0 p-0 mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text num-input">1</span>
              </div>
              <input id="funciones" type="text" name="funciones"
                  class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
            </div>
            <div class="input-group col-12 m-0 p-0 mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text num-input">2</span>
              </div>
              <input id="funciones" type="text" name="funciones"
                  class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
            </div>
            <div class="input-group col-12 m-0 p-0 mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text num-input">3</span>
              </div>
              <input id="funciones" type="text" name="funciones"
                  class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
            </div>
            <div class="input-group col-12 m-0 p-0 mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text num-input">4</span>
              </div>
              <input id="funciones" type="text" name="funciones"
                  class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
            </div>
          </div>
        </div>
      </div>
    @endsection
