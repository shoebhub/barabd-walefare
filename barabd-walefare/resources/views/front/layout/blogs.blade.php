@extends("front.layout.layout")
@section("content")
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url('{{ asset('front/img/Untitled-6.jpg') }}') top center no-repeat; height: 350px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                {{-- <img src="{{ asset('front/img/aboutus.png') }}" alt="About Us Image" class="img-fluid rounded" style="height: 200px; width: 400px;"> --}}
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Blogs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="fw-bold">Blogs & News</h1>
        </div>
        <div class="row justify-content-center">
            <!-- First Blog Card -->
            <div class="col-md-4 d-flex justify-content-center mb-4">
                <div class="card shadow-lg animate-card" style="border-radius: 12px; overflow: hidden;">
                    <img src="{{ asset('front/img/volunteer3.jpeg') }}" class="card-img-top" alt="Blog Image">
                    <div class="card-body text-left">
                      <h5 class="card-title fw-bold mb-1">Card Title</h5>
                      <p class="text-muted small mb-3">By <strong>Nayem Islam</strong> | <span>February 21, 2025</span></p>
                      <p class="card-text mb-3">Quick example text to describe the content.</p>
                      <!-- Date and Author -->
                      <a href="#" class="btn btn-primary rounded-pill px-4">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Second Blog Card -->
            <div class="col-md-4 d-flex justify-content-center mb-4">
                <div class="card shadow-lg animate-card" style=" border-radius: 12px; overflow: hidden;">
                    <img src="{{ asset('front/img/volunteer4.jpeg') }}" class="card-img-top" alt="Blog Image">
                    <div class="card-body text-left">
                      <h5 class="card-title fw-bold mb-1">Card Title</h5>
                      <p class="text-muted small mb-3">By <strong>Nayem Islam</strong> | <span>February 19, 2025</span></p>
                      <p class="card-text mb-3">Quick example text to describe the content.</p>
                      <!-- Date and Author -->
                      <a href="#" class="btn btn-primary rounded-pill px-4">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Third Blog Card -->
            <div class="col-md-4 d-flex justify-content-center mb-4">
                <div class="card shadow-lg animate-card" style="border-radius: 12px; overflow: hidden;">
                    <img src="{{ asset('front/img/volunteer5.jpeg') }}" class="card-img-top" alt="Blog Image">
                    <div class="card-body text-left">
                      <h5 class="card-title fw-bold mb-1">Card Title</h5>
                      <p class="text-muted small mb-3">By <strong>Nayem Islam</strong> | <span>February 17, 2025</span></p>
                      <p class="card-text mb-3">Quick example text to describe the content.</p>
                      <!-- Date and Author -->
                      <a href="#" class="btn btn-primary rounded-pill px-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blogs End -->





@endsection