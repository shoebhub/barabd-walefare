<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
    <a href="" class="brand-link">
        <span class="brand-text font-weight-light">B.A.R & Associates</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i><p>Volunteer<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">    
                        <li class="nav-item">
                            <a href="{{ route('volunteer.acceptace.list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>             
                    </ul>
                </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i><p>Location<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create</p>
                        </a>
                    </li>     
                    <li class="nav-item">
                        <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>             
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i><p>Area<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('area.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create</p>
                        </a>
                    </li>     
                    <li class="nav-item">
                        <a href="{{ route('area.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>             
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i><p>Volunteer Type<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('volunteer.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create</p>
                        </a>
                    </li>     
                    <li class="nav-item">
                        <a href="{{ route('volunteer.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>             
                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i><p>District<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('district.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create</p>
                        </a>
                    </li>     
                    <li class="nav-item">
                        <a href="{{ route('district.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>             
                </ul>
            </li>


           
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>