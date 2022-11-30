<!DOCTYPE html>
<html lang="es">

<head>

    @include('layouts.header')
    <title>Calendario - Programa de Mantenimiento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.3.0/main.min.js"></script>

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

                    
                        @include("modal.calendario-nuevo")
                

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Calendario</h1>
                        <div>
                            <a href="{{ route('home') }}" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-times mr-1"></i>Cerrar</a>
                            
                            <button type="button" data-toggle="modal" data-target="#calendario-nuevo" class="btn btn-primary btn-sm" aria-expanded="false">
                                <i class="fas fa-plus mr-1"></i>Inhabilitar
                            </button>
                                
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Tabla -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Fechas Inhabilitadas</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body"> 
                                    <div id="calendario"></div>   
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
<script src="{{ asset('/js/calendario.js') }}" defer></script>

</html>