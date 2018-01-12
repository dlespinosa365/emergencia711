<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/user_default.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ title_case(Auth::user()->name) }} </p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->

        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="#"><i class="fa fa-home"></i> <span>Portada</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-user-circle"></i> <span>Socios</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('socios') }}">Listado</a></li>
                    <li><a href="{{ route('pagos') }}">Pagos</a></li>
                    <li><a href="#">Reporte</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-calendar"></i> <span>Guardias</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Enfermeria</a></li>
                    <li><a href="#">Choferes</a></li>
                    <li><a href="#">Doctores</a></li>
                    <li><a href="#">Calendario</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-pie-chart"></i> <span>Economato</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Medicamentos</a></li>
                    <li><a href="#">Stock</a></li>
                    <li><a href="#">Asingaciones</a></li>
                    <li><a href="#">Pedidos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-gears"></i> <span>Usuarios</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('usuarios.index') }}">Listado</a></li>
                    <li><a href="{{ route('usuarios.create') }}">Nuevo</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>