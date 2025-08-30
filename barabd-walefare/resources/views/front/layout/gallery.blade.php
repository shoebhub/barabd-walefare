@extends("front.layout.layout")
@section("content")
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url('{{ asset('front/img/Untitled-7.jpg') }}') top center no-repeat; height: 350px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                {{-- <img src="{{ asset('front/img/aboutus.png') }}" alt="About Us Image" class="img-fluid rounded" style="height: 200px; width: 400px;"> --}}
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Gallery Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            {{-- <p class="d-inline-block border rounded-pill py-1 px-4">Gallery</p> --}}
            <h1>Our Gallery</h1>
        </div>
        <div class="row g-4">
            <!-- Gallery Section -->
            @php
                $images = [
                    'front/img/volunteer.jpeg',
                    'front/img/volunteer2.jpeg',
                    'front/img/volunteer3.jpeg',
                    'front/img/volunteer4.jpeg',
                    'front/img/volunteer5.jpeg',
                    'front/img/volunteer6.jpeg',
                    
                ];
            @endphp
            @foreach ($images as $image)
            <div class="col-lg-3 col-md-4 col-6">
                <a href="{{ asset($image) }}" data-lightbox="gallery" data-title="Gallery Image">
                    <img class="img-fluid rounded" src="{{ asset($image) }}" alt="Gallery Image">
                </a>
            </div>
            @endforeach
            <!-- Gallery Section Ends -->
        </div>
    </div>
</div>
<!-- Gallery Section End -->

@endsection
