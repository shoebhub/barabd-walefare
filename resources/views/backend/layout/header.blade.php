<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">


    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user"></i> {{auth()->user()->name ?? 'N/A'}} <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu text-right">
                <!-- Dropdown item for logout -->
                <a href="{{ route('logout') }}" class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-1"></i> Logout 
                </a>
            </div>
        </li>
    </ul>
    
</nav>
<!-- /.navbar -->