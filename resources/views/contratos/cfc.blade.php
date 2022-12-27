<!DOCTYPE html>
<html lang="es">

<head>

    @include('layouts.header')
    <title>Contratos - Programa de Mantenimiento</title>

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
                    @include('modal.cfc-nuevo')


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Contratos</h1>
                        <div>
                            <a href="{{ route('home') }}" type="button" class="btn btn-secondary btn-sm"><i
                                    class="fas fa-times mr-1"></i>Cerrar</a>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-bars mr-1"></i>Opciones
                                </button>
                                <div class="dropdown-menu">
                                    <div class="dropdown-header">Agrupar:</div>
                                    <a type="button" data-toggle="modal" data-target="#cfc-nuevo"
                                        class="dropdown-item"><i class="fas fa-fw fa-hospital-alt mr-1"></i>Doctor &
                                        Especialidad</a>
                                    <div class="dropdown-divider"></div>
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
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Listado Doctores & Especialidades</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="DoctorServicioListar"
                                            width="100%" cellspacing="0">

                                            {{-- TABLA --}}
                                            <thead class="bg-gray-200">
                                                <tr>
                                                    <th>Doctor</th>
                                                    <th>Tratamiento</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            
                                            {{-- CONTENIDO DE LA TABLA --}}
                                            <tbody>
                                                @foreach ($contratos as $list)
                                                     @include('modal.cfc-editar')
                                                    <tr>
                                                        <td>{{ $list->doc_nombres }}</td>
                                                        <td>{{ $list->tra_nombre }}</td>
                                                        <td>
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#cfc-editar{{ $list->stdoc_id }}"
                                                                class="btn btn-secondary btn-circle btn-sm"><i
                                                                    class="fas fa-pencil-alt fa-sm"></i></a>
                                                            
                                                            <form action="{{ route('cfc.delete', $list->stdoc_id) }}"
                                                                method="POST" style="display: inline-block; ">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-circle btn-sm"
                                                                    rel="tooltip"
                                                                    onclick="return confirm('Seguro que quiere eliminar este Contrato?') ">
                                                                    <i class="fas fa-trash fa-sm"
                                                                        title="Eliminar Registro"></i>
                                                                </button>
                                                            </form>
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
