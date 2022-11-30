<!DOCTYPE html>
<html lang="es">

<head>

    @include('layouts.header')
    <title>Servicios - listado</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- MODALES --}}
                    @include('modal.serviciocreate')


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Servicios</h1>
                        <div>
                            <a href="{{ route('home') }}" type="button" class="btn btn-secondary btn-sm"><i
                                    class="fas fa-times mr-1"></i>Cerrar</a>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-bars mr-1"></i>Opciones
                                </button>
                                <div class="dropdown-menu">
                                    <div class="dropdown-header">Crear:</div>
                                    <a type="button" data-toggle="modal" data-target="#serviciocreate"
                                        class="dropdown-item"><i
                                            class="fas fa-fw fa-calendar-alt mr-1"></i>Servicios</a>
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
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Listado de Servicios</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <!-- tabla elegante -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="PacienteListar" width="100%"
                                            cellspacing="0">
                                            <thead class="bg-gray-200">
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <th>Descripcion</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            {{-- <tfoot class="bg-gray-200">
                                                <tr>
                                                    <th>Identificación</th>
                                                    <th>Nombre Completo</th>
                                                    <th>Correo Electrónico</th>
                                                    <th>Teléfono Celular</th>
                                                <th>Acciones</th>
                                                </tr>
                                            </tfoot> --}}
                                            <tbody>
                                                @foreach ($servicios as $list)
                                                    <tr>
                                                        <td>{{ $list->ser_id }}</td>
                                                        <td>{{ $list->ser_nombres }}</td>
                                                        <td>{{ $list->ser_descripcion }}</td>
                                                        <td>


                                                            <button type="button" data-toggle="modal"
                                                                data-target="#servicioedit{{ $list->ser_id }}"
                                                                class="btn btn-secondary btn-circle btn-sm"><i
                                                                    class="fas fa-pencil-alt fa-sm"></i></button>


                                                            <form
                                                                action="{{ route('servicios.delete', $list->ser_id) }}"
                                                                method="POST" style="display: inline-block; ">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-circle btn-sm"
                                                                    rel="tooltip"
                                                                    onclick="return confirm('Seguro que quiere eliminar este servicio?') ">
                                                                    <i class="fas fa-trash fa-sm"
                                                                        title="Eliminar Registro"></i>
                                                                </button>

                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @include('modal.servicioedit')
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

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->

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
