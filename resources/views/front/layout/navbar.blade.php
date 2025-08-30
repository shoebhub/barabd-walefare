<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt me-2" style="color: #0b6623"></small>
                <small>Rasulpur Tower(5th Floor), 49 Rasulpur, Dania, Jatrabari, Dhaka-1236 (Head Office)<br>175, Shahid Syed Nazrul Islam Sarani, Skylark Point, 6th Floor, Dhaka-1000 (Corporate Office)</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-clock me-2" style="color: #0b6623"></small>
                <small>Sat - Thu : 08.00 AM - 06.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt me-2" style="color: #0b6623"></small>
                <small>+8801975363707, +8801313714331, +02-7542195</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square rounded-circle bg-white me-1" style="color: #0b6623" href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
            <a href="{{ route('login') }}" class="rounded-pill" style="background-color: #0b6623; padding: 10px 15px 10px 15px; color: #fff;">Login</a>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0"><img src="{{ asset('front/img/baralogo.png') }}" alt="bar-logo" style="width: 40px; height:40px;">&nbsp;</i><span style="color: #0b6623">B.A.R</span> & <span style="color: red">Associates</span></h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a>
            <a href="{{ route('aog') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'aog' ? 'active' : '' }}">Areas of Giving</a>
            <a href="{{ route('blogs') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'blogs' ? 'active' : '' }}">Blogs</a>
            <a href="{{ route('gallery') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}">Gallery</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact Us</a>
            <a href="{{ url('barabd-welfare') }}" class="nav-item nav-link btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block text-white {{ Route::currentRouteName() == 'appointment' ? 'active' : '' }}">Join as a Volunteer<i class="fa fa-arrow-right ms-3"></i></a>

        </div>
        
    </div>
</nav>
<!-- Navbar End -->