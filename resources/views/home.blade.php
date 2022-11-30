@extends('layouts.main')

{{-- header --}}
@section('header')
    <title>Panel de Control - Programa de Mantenimiento</title>
@endsection

@section('content')
    <!-- Encabezado de pagina -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Control</h1>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle hide" data-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-filter mr-1"></i> Mes
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Enero</a>
                <a class="dropdown-item" href="#">Febrero</a>
                <a class="dropdown-item" href="#">Marzo</a>
                <a class="dropdown-item" href="#">Abril</a>
                <a class="dropdown-item" href="#">Mayo</a>
                <a class="dropdown-item" href="#">Junio</a>
                <a class="dropdown-item" href="#">Julio</a>
                <a class="dropdown-item" href="#">Agosto</a>
                <a class="dropdown-item" href="#">Septiembre</a>
                <a class="dropdown-item" href="#">Octubre</a>
                <a class="dropdown-item" href="#">Noviembre</a>
                <a class="dropdown-item" href="#">Diciembre</a>
            </div>
        </div>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Indicador 1 -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase">
                                Mantenimientos Programados
                            </div>
                            <div class="text-xs .text-gray-600 text-uppercase mb-1">
                                Septiembre
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicador 2 -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase">
                                Mantenimientos Realizados
                            </div>
                            <div class="text-xs .text-gray-600 text-uppercase mb-1">
                                Septiembre
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicador 3 -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase">
                                Mantenimientos Reprogramados
                            </div>
                            <div class="text-xs .text-gray-600 text-uppercase mb-1">
                                Septiembre
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-calendar-plus fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Tabla -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Próximas Atenciones</h6>
                </div>
                <!-- Card Body tabla  -->
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="PacienteProximo" width="100%" cellspacing="0">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th>Identificación</th>
                                    <th>Nombre Completo</th>
                                    <th>Correo Electrónico</th>
                                    <th>Teléfono Celular</th>
                                    <th>Próxima Atención</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                           {{--  <tfoot class="bg-gray-200">
                                <tr>
                                    <th>Identificación</th>
                                    <th>Nombre Completo</th>
                                    <th>Correo Electrónico</th>
                                    <th>Teléfono Celular</th>
                                    <th>Próxima Atención</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot> --}}

                            {{-- tabla con informacion de los pacientes --}}
                            <tbody>
                                @foreach($pacientes as $paciente)
                                    <tr>
                                        <td>{{ $paciente->pac_identificacion}}</td>
                                        <td>{{ $paciente->pac_nombres }}</td>
                                        <td>{{ $paciente->pac_correo }}</td>
                                        <td>{{ $paciente->pac_telefono }}</td>
                                        <td>{{ $paciente->pac_proxima_atencion }}</td>

                                        <td>
                                            <a href="{{ route('paciente.perfil', $paciente->pac_id) }}"
                                                class="btn btn-primary btn-circle btn-sm"><i
                                                    class="fas fa-eye fa-sm"></i></a>
                                            <a type="button" data-toggle="modal"
                                                data-target="#paciente-contactabilidad-nuevo"
                                                class="btn btn-warning btn-circle btn-sm"><i
                                                    class="fas fa-headphones fa-sm"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
