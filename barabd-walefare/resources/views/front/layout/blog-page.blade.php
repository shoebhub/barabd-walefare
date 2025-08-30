@extends("front.layout.layout")
@section("content")

<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <!-- Blog Image -->
                <img src="{{ asset('front/img/volunteer4.jpeg') }}" alt="Blog Image" class="img-fluid rounded mb-4">

                <!-- Blog Title -->
                <h2 class="text-dark fw-bold mb-3 text-center">The Future of Technology</h2>

                <!-- Blog Content -->
                <p class="text-muted">
                    Technology is evolving at an unprecedented pace, reshaping industries and daily life. Innovations such as artificial intelligence, blockchain, and cloud computing are leading the way toward a more connected and efficient world.
                </p>
                <p class="text-muted">
                    As businesses and individuals adapt to these changes, staying informed about new trends and advancements is crucial for success in the digital age.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
