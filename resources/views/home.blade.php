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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total2 }}</div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicador 3 -->

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
                    @if (session('notification'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
                            {{ session('notification') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="PacienteProximo" width="100%" cellspacing="0">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th>Identificación</th>
                                    <th>Nombre Completo</th>
                                    <th>Correo Electrónico</th>
                                    <th>Teléfono Celular</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            {{-- tabla con informacion de los pacientes --}}
                            <tbody>
                                @foreach ($pacientes as $paciente)
                                    <tr>
                                        <td>{{ $paciente->pac_identificacion }} 
                                        <td>
                                            <p><a
                                                    href="{{ route('paciente.perfil', $paciente->pac_id) }}">{{ $paciente->pac_nombres }} {{ $paciente->pac_apellidos }}</a>
                                            </p>
                                        </td>
                                        </td>
                                        <td>{{ $paciente->pac_correo }}</td>
                                        <td>{{ $paciente->pac_telefono }}</td>
                                        <td>
                                            <a href="{{ route('paciente.perfil', $paciente->pac_id) }}"
                                                class="btn btn-primary btn-circle btn-sm"><i
                                                    class="fas fa-eye fa-sm"></i></a>

                                            <input type="tex" value="{{ $paciente->pac_nombres }}" id="pac_nombres_js"
                                                style="display: none;">
                                            <input type="tex" value="{{ $paciente->pac_telefono }}"
                                                id="pac_telefono_js" style="display: none;">

                                            <a type="button" onclick="contactabilidad();" data-toggle="modal"
                                                data-target="#paciente-contactabilidad-nuevo{{ $paciente->pac_id }}"
                                                class="btn btn-warning btn-circle btn-sm"><i class="fas fa-phone"></i></a>
                                        </td>
                                    </tr>
                                    @include('modal.paciente-contactabilidad-nuevo')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/contactabilidad.js') }}" defer></script>
    </div>
@endsection
