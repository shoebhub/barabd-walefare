@extends("front.layout.layout")
@section("content")
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url('{{ asset('front/img/Untitled-4.jpg') }}') top center no-repeat; height: 350px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid " src="{{ asset('front/img/volunteer2.jpeg') }}" alt="">
                    {{-- <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('front/img/about-2.jpg') }}" alt="" style="margin-top: -25%;"> --}}
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Quality health care</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Only Qualified Doctors</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Medical Research Professionals</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection
