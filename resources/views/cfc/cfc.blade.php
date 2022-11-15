<!DOCTYPE html>
<html lang="es">

<head>

    @include('layouts.header')
    <title>CFC - Programa de Mantenimiento</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
           @include('layouts.sidebar')
        <!-- end sidebar-->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- topbar -->
                @include('layouts.topbar')
                <!-- end topbar-->

                <!-- Contenido de la página de inicio -->
                <div class="container-fluid">


                        @include("modal.cfc-nuevo");
                        @include("modal.cfc-editar");
                        @include("modal.cfc-eliminar");

                        @include("modal.doctor-nuevo");
                        @include("modal.servicio-nuevo");


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">CFC</h1>
                        <div>
                            <a href="index.php" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-times mr-1"></i>Cerrar</a>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-bars mr-1"></i>Opciones
                                </button>
                                <div class="dropdown-menu">
                                    <div class="dropdown-header">Agrupar:</div>
                                    <a type="button" data-toggle="modal" data-target="#cfc-nuevo" class="dropdown-item"><i class="fas fa-fw fa-hospital-alt mr-1"></i>Doctor & Servicio</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-header">Nuevo:</div>
                                    <a type="button" data-toggle="modal" data-target="#doctor-nuevo" class="dropdown-item"><i class="fas fa-fw fa-user-md mr-1"></i>Doctor</a>
                                    <a type="button" data-toggle="modal" data-target="#servicio-nuevo" class="dropdown-item"><i class="fas fa-fw fa-tooth mr-1"></i>Servicio</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- fila de contenido -->

                    <div class="row">

                        <!-- Tabla -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Listado Doctores & Servicios</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="DoctorServicioListar" width="100%" cellspacing="0">
                                            <thead class="bg-gray-200">
                                                <tr>
                                                    <th>Código</th>
                                                    <th>Doctor</th>
                                                    <th>Servicio</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tfoot class="bg-gray-200">
                                                <tr>
                                                    <th>Código</th>
                                                    <th>Doctor</th>
                                                    <th>Servicio</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Roberto Arcon, Hernan Ochoa, Fabiana Tejera</td>
                                                    <td>Blanqueamiento Dental</td>
                                                    <td>
                                                        <a type="button" data-toggle="modal" data-target="#cfc-editar" class="btn btn-secondary btn-circle btn-sm"><i class="fas fa-pencil-alt fa-sm"></i></a>
                                                        <a type="button" data-toggle="modal" data-target="#cfc-eliminar" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                                                    </td>
                                                </tr>
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

            <!-- footer -->
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

</body>

</html>