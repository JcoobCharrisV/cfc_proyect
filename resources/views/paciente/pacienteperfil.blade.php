<!DOCTYPE html>
<html lang="es">

<head>
    {{-- header --}}
    @include('layouts.header')
    <title>Perfil Paciente - Programa de Mantenimiento</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- sidebar --}}
        @include('layouts.sidebar')
        <!-- end sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                {{-- topbar --}}
                @include('layouts.topbar')
                <!-- end topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- Modales --}}

                    @include('modal.paciente-mantenimiento-nuevo')
                    @include('modal.paciente-mantenimiento-ver')
                    @include('modal.paciente-mantenimiento-editar')
                    @include('modal.paciente-mantenimiento-mensaje')
                    @include('modal.paciente-mantenimiento-eliminar')
                

                    @include('modal.paciente-contactabilidad-editar')
                    @include('modal.paciente-contactabilidad-eliminar')
                    @include('modal.agendargestion')

                    <!-- Encabezado de la pagina -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Perfil del Paciente</h1>
                        <div>
                            <a href="/home" type="button" class="btn btn-secondary btn-sm"><i
                                    class="fas fa-times mr-1"></i>Cerrar</a>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-bars mr-1"></i>Opciones
                                </button>
                                <div class="dropdown-menu">
                                    <div class="dropdown-header">Nuevo:</div>
                                    <a type="button" data-toggle="modal" data-target="#paciente-mantenimiento-nuevo"
                                        class="dropdown-item"><i
                                            class="fas fa-fw fa-calendar-alt mr-1"></i>Mantenimiento</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    {{-- Informacion de los pacientes datos --}}
                    @foreach ($pacientes as $list)
                        <div class="alert alert-info" role="alert">
                            <div class="row text-center">
                                <div class="col-md-12 mb-2">
                                    <h2>{{ $list->pac_nombres }} {{ $list->pac_apellidos }}</h2>                              
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <h6><strong>Identificación: </strong> {{ $list->pac_tipo_identificacion }} -
                                        {{ $list->pac_identificacion }}</h6>
                                    <h6><strong>Edad: </strong> {{ $list->pac_edad }}</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6><strong>Teléfono Celular: </strong> {{ $list->pac_telefono }}</h6>
                                    <h6><strong>Correo Electrónico: </strong> {{ $list->pac_correo }}</h6>
                                    <h6><strong>Eps: </strong> {{ $list->eps_nombres }}</h6>
                                    <h6><strong>Convenio: </strong> {{ $list->con_nombres }}</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6><strong>País de Origen: </strong>{{ $list->pac_pais_origen }}</h6>
                                    <h6><strong>País de Residencia: </strong>{{ $list->pac_residencia }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    <div class="row">

                        <!-- Tabla -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gestión de Mantenimientos</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="MantenimeintoListar"
                                            width="100%" cellspacing="0">
                                            <thead class="bg-gray-200">
                                                <tr>
                                                    <th>Fecha Atención</th>
                                                    <th>Servicio</th>
                                                    <th>Frecuencia</th>
                                                    <th>Doctor</th>
                                                    <th>Próxima Atención</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                           
                                            <tbody>
                                                <tr>
                                                    @foreach ($gestiones as $list)
                                                <tr>
                                                    <td>{{ $list->ges_fecha_atencion }} </td>
                                                    <td>{{ $list->tra_nombres }}</td>
                                                    <td>{{ $list->ges_frecuencia_mantenimiento_numero }}
                                                        {{ $list->ges_frecuencia_mantenimiento }}</td>
                                                    <td>{{ $list->doc_nombres }}</td>
                                                    <td>{{ $list->ges_fecha_prox_atencion }} </td>
                                                    <td>
                                                       
                                                        
                                                        <a type="button" href=" {{ route('pdf.gestion', $list->ges_id)}}"
                                                            class="btn btn-primary btn-circle btn-sm"><i
                                                                class="fas fa-eye fa-sm"></i></a>
                                                        <a type="button" data-toggle="modal"
                                                            data-target="#paciente-mantenimiento-editar"
                                                            class="btn btn-secondary btn-circle btn-sm"><i
                                                                class="fas fa-pencil-alt fa-sm"></i></a>                                                        
                                                        <a type="button" data-toggle="modal"
                                                            data-target="#paciente-mantenimiento-eliminar"
                                                            class="btn btn-danger btn-circle btn-sm"><i
                                                                class="fas fa-trash fa-sm"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <!-- Tabla -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gestión de Contactabilidad</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="ContactabilidadListar"
                                            width="100%" cellspacing="0">
                                            <thead class="bg-gray-200">
                                                <tr>
                                                    <th>Fecha Gestión</th>
                                                    <th>Tipificación</th>
                                                    <th>Observación</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @foreach ($contactabilidad as $list2 )                                                                                                 
                                                <tr>
                                                    <td>{{ $list2->rec_fecha }}</td>
                                                    <td>{{ $list2->tip_nombres }}</td>
                                                    <td>{{ $list2->rec_comentario }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#contactabilidadver{{ $list2->rec_id }}"
                                                                class="btn btn-primary btn-circle btn-sm"><i
                                                                    class="fas fa-eye fa-sm"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @include("modal.contactabilidadver")
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- footer-->
            @include('layouts.footer')
            <!-- end footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="{{ asset('js/mantenimiento.js') }}" defer></script>
    <script src="{{ asset('js/proximacita.js') }}" defer></script>
</body>


</html>
