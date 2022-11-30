<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <img src="/img/favicon.png" alt="Carlos Fernandez de Castro" class="" width="50%">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Panel de Control</span></a>
    </li>

    <!-- divisor -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestión
    </div>

    <!-- Nav Item - PACIENTE -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('paciente') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Pacientes</span>
        </a>
    </li>

    <!-- Nav Item - DOCTORES -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('doctores') }}">
            <i class="fa fa-user-md"></i>
            <span>Doctores</span>
        </a>
    </li>

    <!-- Nav Item - CFC -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('cfc') }}" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-hospital-alt"></i>
                <span>Servicios</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('servicios') }}"><i class="bi bi-list"></i>Servicio</a>
                    <a class="collapse-item" href="{{ route('tipo') }}"><i class="bi bi-list"></i>Tipo</a>
                    <a class="collapse-item" href="{{ route('tratamiento') }}"><i class="bi bi-list"></i>Tratamiento</a>

                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cfc') }}">
                <i class="fa fa-address-book"></i>
                <span>Contratos</span>
            </a>
        </li>

    <!-- Nav Item - CALENDARIO -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('calendario') }}">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Calendario</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Reporte
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" type="button" data-toggle="modal" data-target="">
            <i class="fas fa-fw fa-file-excel"></i>
            <span>Mantenimiento</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
