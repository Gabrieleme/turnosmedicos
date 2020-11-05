<ul class="sidebar-menu" data-widget="tree">
    <li class="header">GESTIONAR DATOS</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-heartbeat"></i> <span>Dashboard</span></a></li>
    <li><a href="#"><i class="fa fa-stethoscope"></i> <span>Especialidades</span></a></li>
    <li><a href="#"><i class="fa fa-user-md"></i> <span>Médicos</span></a></li>
    <li><a href="#"><i class="fa fa-user-plus"></i> <span>Pacientes</span></a></li>
    <li class="header">REPORTES</li>
    <li><a href="#"><i class="fa fa-search-plus"></i> <span>Frecuencia de citas</span></a></li>
    <li><a href="#"><i class="fa fa-medkit"></i> <span>Médicos mas activos</span></a></li>
    <!--opcion con multinivel--
    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#">Link in level 1</a></li>
            <li><a href="#">Link in level 2</a></li>
        </ul>
    </li>
    -->
    <li class="fa-sign-out">
        <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <!--{{ __('Cerrar sesión') }}-->
            <i class="fa fa-sign-out"></i><span>Cerrar sesión</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>
