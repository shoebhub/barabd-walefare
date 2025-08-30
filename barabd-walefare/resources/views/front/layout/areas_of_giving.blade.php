@extends("front.layout.layout")
@section("content")

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url('{{ asset('front/img/Untitled-5.jpg') }}') top center no-repeat; height: 350px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                {{-- <img src="{{ asset('front/img/aboutus.png') }}" alt="About Us Image" class="img-fluid rounded" style="height: 200px; width: 400px;"> --}}
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Areas of Giving Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1>Areas of Giving</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-heartbeat fs-4" style="color: #d73f47"></i>
                    </div>
                    <h4 class="mb-3">Education and Skill Development</h4>
                    <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class="btn" href=""><i class="fa fa-plus me-3" style="color: #d73f47"></i>Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-x-ray fs-4" style="color: #d73f47"></i>
                    </div>
                    <h4 class="mb-3">Winter Relief</h4>
                    <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class="btn" href=""><i class="fa fa-plus me-3" style="color: #d73f47"></i>Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-brain fs-4" style="color: #d73f47"></i>
                    </div>
                    <h4 class="mb-3">Food Relief</h4>
                    <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class="btn" href=""><i class="fa fa-plus me-3" style="color: #d73f47"></i>Read More</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Areas Of Giving End -->

@endsection