@extends('layouts.app')
<div class="contenedor">
    <div class="img-uaeos">
        @section('content')
        <img src="{{ asset('img/uaeos-logo.png') }}" alt="">
        <h2 class="title-home">COMPROMISO DE ACUERDO ENTRE EVALUADOR Y EVALUADO</h2>
    </div>
    <!-- multistep form -->
    {{-- <form action="{{ route('empleado.crear') }}" method="POST" id="msform" enctype="multipart/form-data">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active" style="font-size: 14px"><b>IDENTIFICACIÓN GENERAL</b></li>
            <li style="font-size: 14px"><b>COMPONENTES DE LA EVALUACIÓN</b></li>
            <li style="font-size: 14px"><b>COMPROMISO DE ACUERDO ENTRE EVALUADOR Y EVALUADO</b></li>
            <li style="font-size: 14px"><b>TIPO DE VACANCIA EN PROVISIONALIDAD Y EVALUACIÓN </b></li>
            <li style="font-size: 14px"><b>MEJORAMIENTO Y DESARROLLO</b></li>
            <li style="font-size: 14px"><b>OBSERVACIONES DEL EVALUADO </b></li>
        </ul>
        <!-- fieldsets -->
        <fieldset class="row mx-0">
            <div class="col-md-4 col-sm-12">
                <h2 class="fs-title"><b>1.1 EMPLEADO A EVALUAR</b></h2>
                <input autocomplete="off" type="text" name="nombreCompleto" id="nombreCompleto" required
                    placeholder="Nombre Completo" />
                <div class="d-flex align-items-center espacio">
                    <select class="browser-default custom-select mg-lg-4">
                        <option selected>--Tipo de Documento</option>
                        <option value="1">Cédula de Ciudadanía</option>
                        <option value="2">Tarjeta de Identidad</option>
                        <option value="3">Cedula de Extranjería</option>
                        <option value="4">Pasaporte</option>
                        <option value="5">Pasaporte</option>
                        <option value="6">NIT</option>
                        <option value="7">Registro Civíl</option>
                    </select>
                    <input type="text" name="tipoyDocumento" id="tipoyDocumento" placeholder="Número de Documento" />
                </div>
                <div class="d-flex align-items-center">
                    <select class="browser-default custom-select mg-lg-4 select-cargo">
                        <option selected>--Seleccione su Cargo</option>
                        <option value="1">Asesor</option>
                        <option value="2">Auxiliar Administrativo</option>
                        <option value="3">Conductor Mecanico</option>
                        <option value="4">Director Nacional</option>
                        <option value="5">Director Tecnico</option>
                        <option value="6">Jefe De Oficina</option>
                        <option value="7">Jefe Oficina Juridica</option>
                        <option value="8">Profesional Especializado</option>
                        <option value="9">Secretaria Ejecutiva</option>
                        <option value="10">Secretario</option>
                        <option value="11">Tecnico Administrativo</option>
                    </select>
                </div>
                <div class="d-flex align-items-center">
                    <select class="browser-default custom-select mg-lg-4">
                        <option selected>--Seleccione su Dependencia</option>
                        <option value="Grupo de Educación e Investigación">Grupo de Educación e Investigación</option>
                        <option value="Grupo de Comunicaciones y Prensa">Grupo de Comunicaciones y Prensa</option>
                        <option value="Grupo Tecnologías de la Información">Grupo Tecnologías de la Información</option>
                        <option value="Grupo de Planeación y Estadística">Grupo de Planeación y Estadística</option>
                        <option value="Dirección de Investigación y Planeación">Dirección de Investigación y Planeación
                        </option>
                        <option value="Oficina Control Interno">Oficina Control Interno</option>
                        <option value="Grupo Gestión Humana">Grupo Gestión Humana</option>
                        <option value="Grupo Gestión Administrativa">Grupo Gestión Administrativa</option>
                        <option value="Despacho Subdirector Nacional">Despacho Subdirector Nacional</option>
                        <option value="Dirección Nacional">Dirección Nacional</option>
                        <option value="Oficina Asesoría Juridica">Oficina Asesoría Juridica</option>
                        <option value="Grupo Gestión Financiera">Grupo Gestión Financiera</option>
                        <option value="Dirección de Desarrollo de las Organizaciones Solidarias">Dirección de Desarrollo
                            de las Organizaciones Solidarias</option>
                        <option value="Grupo de Sinergias Interinstitucionales">Grupo de Sinergias Interinstitucionales
                        </option>
                        <option value="Grupo de Atención Especial a Poblaciones">Grupo de Atención Especial a
                            Poblaciones</option>
                        <option value="Grupo de Emprendimiento y Productividad">Grupo de Emprendimiento y Productividad
                        </option>
                        <option value="Grupo de Desarrollo Solidario">Grupo de Desarrollo Solidario</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 divider">
                <h2 class="fs-title"><b>1.2. JEFE INMEDIATO</b></h2>
                <input type="text" name="nombreCompletoJefe" placeholder="Nombre Completo" />
                <div class="d-flex align-items-center espacio">
                    <select class="browser-default custom-select mg-lg-4">
                        <option selected>Tipo de Documento</option>
                        <option value="1">Cédula de Ciudadanía</option>
                        <option value="2">Tarjeta de Identidad</option>
                        <option value="3">Cedula de Extranjería</option>
                        <option value="4">Pasaporte</option>
                        <option value="5">Pasaporte</option>
                        <option value="6">NIT</option>
                        <option value="7">Registro Civíl</option>
                    </select>
                    <input type="text" name="tipoyDocumentojefe" placeholder="Número de Documento" />
                </div>
                <div class="d-flex align-items-center">
                    <select class="browser-default custom-select mg-lg-4 select-cargo">
                        <option selected>--Seleccione su Cargo</option>
                        <option value="1">Asesor</option>
                        <option value="2">Auxiliar Administrativo</option>
                        <option value="3">Conductor Mecanico</option>
                        <option value="4">Director Nacional</option>
                        <option value="5">Director Tecnico</option>
                        <option value="6">Jefe De Oficina</option>
                        <option value="7">Jefe Oficina Juridica</option>
                        <option value="8">Profesional Especializado</option>
                        <option value="9">Secretaria Ejecutiva</option>
                        <option value="10">Secretario</option>
                        <option value="11">Tecnico Administrativo</option>
                    </select>
                </div>
                <div class="d-flex align-items-center">
                    <select class="browser-default custom-select mg-lg-4">
                        <option selected>--Seleccione su Dependencia</option>
                        <option value="Grupo de Educación e Investigación">Grupo de Educación e Investigación</option>
                        <option value="Grupo de Comunicaciones y Prensa">Grupo de Comunicaciones y Prensa</option>
                        <option value="Grupo Tecnologías de la Información">Grupo Tecnologías de la Información</option>
                        <option value="Grupo de Planeación y Estadística">Grupo de Planeación y Estadística</option>
                        <option value="Dirección de Investigación y Planeación">Dirección de Investigación y Planeación
                        </option>
                        <option value="Oficina Control Interno">Oficina Control Interno</option>
                        <option value="Grupo Gestión Humana">Grupo Gestión Humana</option>
                        <option value="Grupo Gestión Administrativa">Grupo Gestión Administrativa</option>
                        <option value="Despacho Subdirector Nacional">Despacho Subdirector Nacional</option>
                        <option value="Dirección Nacional">Dirección Nacional</option>
                        <option value="Oficina Asesoría Juridica">Oficina Asesoría Juridica</option>
                        <option value="Grupo Gestión Financiera">Grupo Gestión Financiera</option>
                        <option value="Dirección de Desarrollo de las Organizaciones Solidarias">Dirección de Desarrollo
                            de las Organizaciones Solidarias</option>
                        <option value="Grupo de Sinergias Interinstitucionales">Grupo de Sinergias Interinstitucionales
                        </option>
                        <option value="Grupo de Atención Especial a Poblaciones">Grupo de Atención Especial a
                            Poblaciones</option>
                        <option value="Grupo de Emprendimiento y Productividad">Grupo de Emprendimiento y Productividad
                        </option>
                        <option value="Grupo de Desarrollo Solidario">Grupo de Desarrollo Solidario</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <h2 class="fs-title"><b>1.3 SEGUNDO EVALUADOR</b></h2>
                <input type="text" name="nameCompleto" placeholder="Nombre Completo" />
                <div class="d-flex align-items-center espacio">
                    <select class="browser-default custom-select mg-lg-4">
                        <option selected>Tipo de Documento</option>
                        <option value="1">Cédula de Ciudadanía</option>
                        <option value="2">Tarjeta de Identidad</option>
                        <option value="3">Cedula de Extranjería</option>
                        <option value="4">Pasaporte</option>
                        <option value="5">Pasaporte</option>
                        <option value="6">NIT</option>
                        <option value="7">Registro Civíl</option>
                    </select>
                    <input type="text" name="tipoyDocumentojefe" placeholder="Número de Documento" />
                </div>
                <div class="d-flex align-items-center">
                    <select class="browser-default custom-select mg-lg-4 select-cargo">
                        <option selected>--Seleccione su Cargo</option>
                        <option value="1">Asesor</option>
                        <option value="2">Auxiliar Administrativo</option>
                        <option value="3">Conductor Mecanico</option>
                        <option value="4">Director Nacional</option>
                        <option value="5">Director Tecnico</option>
                        <option value="6">Jefe De Oficina</option>
                        <option value="7">Jefe Oficina Juridica</option>
                        <option value="8">Profesional Especializado</option>
                        <option value="9">Secretaria Ejecutiva</option>
                        <option value="10">Secretario</option>
                        <option value="11">Tecnico Administrativo</option>
                    </select>
                </div>
                <div class="d-flex align-items-center">
                    <select class="browser-default custom-select mg-lg-4">
                        <option selected>--Seleccione su Dependencia</option>
                        <option value="Grupo de Educación e Investigación">Grupo de Educación e Investigación</option>
                        <option value="Grupo de Comunicaciones y Prensa">Grupo de Comunicaciones y Prensa</option>
                        <option value="Grupo Tecnologías de la Información">Grupo Tecnologías de la Información</option>
                        <option value="Grupo de Planeación y Estadística">Grupo de Planeación y Estadística</option>
                        <option value="Dirección de Investigación y Planeación">Dirección de Investigación y Planeación
                        </option>
                        <option value="Oficina Control Interno">Oficina Control Interno</option>
                        <option value="Grupo Gestión Humana">Grupo Gestión Humana</option>
                        <option value="Grupo Gestión Administrativa">Grupo Gestión Administrativa</option>
                        <option value="Despacho Subdirector Nacional">Despacho Subdirector Nacional</option>
                        <option value="Dirección Nacional">Dirección Nacional</option>
                        <option value="Oficina Asesoría Juridica">Oficina Asesoría Juridica</option>
                        <option value="Grupo Gestión Financiera">Grupo Gestión Financiera</option>
                        <option value="Dirección de Desarrollo de las Organizaciones Solidarias">Dirección de Desarrollo
                            de las Organizaciones Solidarias</option>
                        <option value="Grupo de Sinergias Interinstitucionales">Grupo de Sinergias Interinstitucionales
                        </option>
                        <option value="Grupo de Atención Especial a Poblaciones">Grupo de Atención Especial a
                            Poblaciones</option>
                        <option value="Grupo de Emprendimiento y Productividad">Grupo de Emprendimiento y Productividad
                        </option>
                        <option value="Grupo de Desarrollo Solidario">Grupo de Desarrollo Solidario</option>
                    </select>
                </div>
            </div>
            <input type="button" name="siguiente" class="next action-button first-button" value="Siguiente" />
        </fieldset>

        <fieldset>
            <div class="row m-0">
                <h2 class="fs-title col-12"><b>2. COMPONENTES DE LA EVALUACIÓN</b></h2>
                <div class="col-xs-12 col-md-6">
                    <label for="metas" class="text-title">Metas:</label>
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
                        <div class="input-group col-12 m-0 p-0 mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text num-input">5</span>
                            </div>
                            <input id="metas" type="text" name="metas"
                                class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <label for="funciones" class="text-title">Funciones, actividades y tareas acordadas:</label>
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
                        <div class="input-group col-12 m-0 p-0 mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text num-input">5</span>
                            </div>
                            <input id="funciones" type="text" name="funciones"
                                class="form-control w-auto border-top-0 border-right-0 border-left-0 border-blue rounded-0 colorF" />
                        </div>
                    </div>
                </div>
                <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#eee">
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-title">Evidencias o soportes</th>
                            <th rowspan="2" class="text-title">¿Sujeto a Cronograma de Actividades?</th>
                            <th colspan="2" class="text-title">PERIODO EVALUADO</th>
                        </tr>
                        <tr>
                            <th colspan="1">% Acordado</th>
                            <th colspan="1">% Cumplido</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0;$i<5;$i++) <tr>
                            <td>
                                <input type="text" class="input-table mb-2" placeholder="Evidencias o Soportes" />
                            </td>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td><input type="number" min="0" max="100" class="input-table text-center" /></td>
                            <td><input type="number" min="0" max="100" class="input-table text-center" /></td>
                            </tr>
                            @endfor
                            <tr>
                                <td colspan="2">
                                    <p class="text-center margin-p"><b>TOTAL EVALUACIÓN</b></p>
                                </td>
                                <td><input type="number" min="0" max="100" class="input-table text-center" /></td>
                                <td><input type="number" min="0" max="100" class="input-table text-center" /></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <input type="button" name="siguiente" class="next action-button" value="Siguiente" />
            <input type="button" name="atras" class="previous action-button" value="Atras" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title pb-3"><b>3. COMPROMISO DE ACUERDO ENTRE EVALUADOR Y EVALUADO</b></h2>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="evaluado" style="float: left">Evaluado</label>
                        <input type="text" class="form-control compromiso" id="evaluado"
                            placeholder="Nombres y Apellidos">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="block font-medium text-sm text-gray-700" for="archivo" style="float: left">Cargue
                            su Firma (En formato PDF)</label>
                        <input type="file" class="form-control"">
                </div>
              </div>
            <div class=" col-md-2">
                        <div class="mb-3">
                            <label for="fecha" style="float: left" class="control-label">Ciudad</label>
                            <select class="form-control" id="inputCiudadLine2">
                                <option value="">-</option>
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
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="fecha" style="float: left">Fecha</label>
                            <input type="date" class="form-control" id="date" placeholder="Fecha">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="evaluado" style="float: left">Evaluador</label>
                            <input type="text" class="form-control compromiso" id="evaluado"
                                placeholder="Nombres y Apellidos">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="block font-medium text-sm text-gray-700" for="archivo"
                                style="float: left">Cargue su Firma (En formato PDF)</label>
                            <input type="file" class="form-control"">
                </div>
              </div>
              <div class=" col-md-2">
                            <div class="mb-3">
                                <label for="fecha" style="float: left" class="control-label">Ciudad</label>
                                <select class="form-control" id="inputCiudadLine2">
                                    <option value="">-</option>
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
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="fecha" style="float: left">Fecha</label>
                                <input type="date" class="form-control" id="date" placeholder="Fecha">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="evaluado" style="float: left">Segundo Evaluador</label>
                                <input type="text" class="form-control compromiso" id="evaluado"
                                    placeholder="Nombres y Apellidos">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="block font-medium text-sm text-gray-700" for="archivo"
                                    style="float: left">Cargue su Firma (En formato PDF)</label>
                                <input type="file" class="form-control"">
                </div>
              </div>
              <div class=" col-md-2">
                                <div class="mb-3">
                                    <label for="fecha" style="float: left" class="control-label">Ciudad</label>
                                    <select class="form-control" id="inputCiudadLine2">
                                        <option value="">-</option>
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
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="fecha" style="float: left">Fecha</label>
                                    <input type="date" class="form-control" id="date" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <input type="button" name="siguiente" class="next action-button" value="Siguiente" />
                        <input type="button" name="atras" class="previous action-button" value="Atras" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title"><b>3. TIPO DE VACANCIA EN PROVISIONALIDAD Y EVALUACIÓN </b></h2>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="fecha" style="float: left" class="control-label">Tipo de Vacancia</label>
                        <select class="form-control" id="inputCiudadLine2">
                            <option value="">-</option>
                            <option value="">VACANCIA DEFINITIVA POR SURTIR CONCURSO</option>
                            <option value="">VACANCIA TEMPORAL</option>
                            <option value="">VACANCIA DEFINITIVA A TÉRMINO FIJO</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="total" style="float: left">Calificación Porcentual</label>
                        <input type="text" class="form-control" id="total" placeholder="%">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="block font-medium text-sm text-gray-700" for="archivo" style="float: left">Número
                            de Días</label>
                        <input type="text" class="form-control" placeholder="No. Días">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="fecha" style="float: left" class="control-label">Calificación Porcentual!</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="total" style="float: left">Calificación</label>
                        <input type="text" class="form-control" id="total">
                    </div>
                </div>
            </div>
            <input type="button" name="siguiente" class="next action-button" value="Siguiente" />
            <input type="button" name="atras" class="previous action-button" value="Atras" />
        </fieldset>

        <fieldset>
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
            <h2 class="fs-title mt-8"><b>OBSERVACIONES DEL EVALUADO</b></h2>
            <div class="md-form mt-3">
                <i class="fas fa-pencil-alt prefix"></i>
                <textarea id="form10" class="md-textarea form-control" rows="3"
                    placeholder="Escribe en este área de texto las observaciones que tengas respecto al evaluado"></textarea>
            </div>

            <input type="button" name="siguiente" class="next action-button" value="Siguiente" />
            <input type="button" name="atras" class="previous action-button" value="Atras" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title pb-3"><b>6. COMPROMISO DE ACUERDO ENTRE EVALUADOR Y EVALUADO</b></h2>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="evaluado" style="float: left">Evaluado</label>
                        <input type="text" class="form-control compromiso" id="evaluado"
                            placeholder="Nombres y Apellidos">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="block font-medium text-sm text-gray-700" for="archivo" style="float: left">Cargue
                            su Firma (En formato PDF)</label>
                        <input type="file" class="form-control"">
                </div>
              </div>
            <div class=" col-md-2">
                        <div class="mb-3">
                            <label for="fecha" style="float: left" class="control-label">Ciudad</label>
                            <select class="form-control" id="inputCiudadLine2">
                                <option value="">-</option>
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
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="fecha" style="float: left">Fecha</label>
                            <input type="date" class="form-control" id="date" placeholder="Fecha">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="evaluado" style="float: left">Evaluador</label>
                            <input type="text" class="form-control compromiso" id="evaluado"
                                placeholder="Nombres y Apellidos">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="block font-medium text-sm text-gray-700" for="archivo"
                                style="float: left">Cargue su Firma (En formato PDF)</label>
                            <input type="file" class="form-control"">
                </div>
              </div>
              <div class=" col-md-2">
                            <div class="mb-3">
                                <label for="fecha" style="float: left" class="control-label">Ciudad</label>
                                <select class="form-control" id="inputCiudadLine2">
                                    <option value="">-</option>
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
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="fecha" style="float: left">Fecha</label>
                                <input type="date" class="form-control" id="date" placeholder="Fecha">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="evaluado" style="float: left">Segundo Evaluador</label>
                                <input type="text" class="form-control compromiso" id="evaluado"
                                    placeholder="Nombres y Apellidos">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="block font-medium text-sm text-gray-700" for="archivo"
                                    style="float: left">Cargue su Firma (En formato PDF)</label>
                                <input type="file" class="form-control"">
                </div>
              </div>
              <div class=" col-md-2">
                                <div class="mb-3">
                                    <label for="fecha" style="float: left" class="control-label">Ciudad</label>
                                    <select class="form-control" id="inputCiudadLine2">
                                        <option value="">-</option>
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
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="fecha" style="float: left">Fecha</label>
                                    <input type="date" class="form-control" id="date" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                        <input type="button" name="atras" class="previous action-button" value="Atras" />
        </fieldset>
    </form>
</div> --}}

<div class="textoHeader">
    <p>Formulario de Compromiso</p>
</div>
<div class="form-compromiso">
    <form method="POST" action="{{ route('evaluacion.store') }}" id="" enctype="multipart/form-data">
        <div class="form-group">
            <div class="checkbox">
                <label>¿Se compromete?</label> &nbsp;
                <input id="compromiso" type="checkbox">
            </div>
            <br>

            <label for="email">Ciudad:</label>
            <select class="form-control" id="inputCiudadLine2">
                <option value="">-</option>
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
            </select><br>

            <div class="form-group">
                <label for="evaluador_dos">Segundo Evaluador:</label>
                <input type="text" class="form-control" id="evaluador_dos">
            </div>
        </div>
        <button type="submit" class="btn btn-default btn-save btn-primary m-0">Guardar</button>
    </form>
</div>

@endsection
