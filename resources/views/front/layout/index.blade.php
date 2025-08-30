@extends("front.layout.layout")
@section("content")
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #fff;
    }

    .hero-section {
        display: flex;
        align-items: center;
        height: 700px;
        position: relative;
        overflow: hidden;
        margin-bottom: 54px;
    }

    .left-section {
        height: 700px;
        position: relative;
        width: 65%; /* Control how much space the left section takes */
        background-color: #d73f47;
        color: white;
        padding: 50px;
        clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
        z-index: 2; /* Ensures it is above the right section */
        margin-right: -300px; /* Overlapping effect */
        
        /* Centering the text */
        display: flex;
        align-items: center; 
        justify-content: flex-start;
    }


    .text-section {
        max-width: 700px;
        text-align: left;
    }

    .text-section h2 {
        color: #fff;
        font-size: 35px;
        font-weight: 200;
        margin: 0;
    }

    .text-section h1 {
        color: #fff;
        font-size: 55px;
        font-weight: bold;
    }

    .text-section p {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 70px;
    }

    .join-btn {
        background-color: #0b6623;
        color: white;
        padding: 12px 31px;
        border: none;
        cursor: pointer;
        font-size: 20px;
        border-radius: 22px;
    }

    /* Right Section */
    .right-section {
        position: relative;
        width: 60%;
        height: 700px;
        overflow: hidden;
    }

    .right-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .animate-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .animate-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
    }

    /* 🔹 Responsive Design - Adjust for Tablets */
@media (max-width: 1024px) {
    .hero-section {
        flex-direction: column;
        height: auto;
    }

    .left-section {
        width: 100%;
        height: auto;
        clip-path: none; /* Removes angled shape on small screens */
        margin-right: 0;
        padding: 40px;
    }

    .text-section {
        max-width: 90%;
        text-align: center;
    }

    .right-section {
        width: 100%;
        height: auto;
    }

    .padding-top{
        padding-top: 4rem;
    }
}

/* 🔹 Responsive Design - Adjust for Mobile */
@media (max-width: 768px) {
    .text-section h2 {
        font-size: 28px;
    }

    .text-section h1 {
        font-size: 40px;
    }

    .text-section p {
        font-size: 14px;
    }

    .join-btn {
        font-size: 20px;
        padding: 10px 16px;
    }
}

</style>

<!-- Header Start -->
<div class="hero-section">
    <!-- Left Section with Shape and Text -->
    <div class="left-section">
        <div class="text-section">
            <h2>We are</h2>
            <h1>B.A.R & Associates</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="{{ url('barabd-welfare') }}" class="join-btn">Join Us</a>
        </div>
    </div>

    <!-- Right Section (Image) -->
    <div class="right-section">
        <img src="{{ asset('front/img/hero.jpeg') }}" alt="Barabd Welfare Foundation">
    </div>
</div>
<!-- Header End -->



<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 pt-10">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid " src="{{ asset('front/img/mdsir.jpeg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                {{-- <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p> --}}
                <h1 class="mb-4">Welcome to B.A.R & Associates!</h1>
                <p>At B.A.R & Associates, our mission is to bring hope, dignity, and support to those in need. Established in [Year], we are committed to addressing pressing societal issues and making a positive impact in communities around the globe.</p>
                <p class="mb-4">We believe that every individual deserves a chance to lead a fulfilling life, and our programs are designed to empower, uplift, and inspire change. With a dedicated team of volunteers, donors, and partners, we work tirelessly to deliver resources and opportunities where they are needed most.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i><b>Our Vision: </b>A world where compassion and generosity bring lasting change.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i><b>Our Mission: </b>To transform lives through impactful giving and sustainable development.</p>
                <p class="mb-4">We believe that every individual deserves a chance to lead a fulfilling life, and our programs are designed to empower, uplift, and inspire change. With a dedicated team of volunteers, donors, and partners, we work tirelessly to deliver resources and opportunities where they are needed most.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="{{ route('about') }}">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


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


<!-- Feature Start/ Join as a Volunteer -->
<div class="container-fluid overflow-hidden my-5 px-lg-0" style="background-color: #d73f47">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    {{-- <p class="d-inline-block border rounded-pill text-light py-1 px-4"></p> --}}
                    <h1 class="text-white mb-4">Join as a Volunteer</h1>
                    <p class="text-white mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <a class="btn btn-primary d-inline-block border rounded-pill py-3 px-5 mt-3" href="{{ url('barabd-welfare') }}" style="background-color: white; color: #d73f47;">Join as a Volunteer</a>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('front/img/volunteer.jpeg') }}" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


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



<!-- Appointment Start -->
<div class="container-xxl py-5" id="appointment">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            {{-- <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p> --}}
            <h1>Appointment</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Make An Appointment</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt" style="color: #0b6623"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Call Us Now</p>
                        <h5 class="mb-0">+8801975363707, +8801313714331, +02-7542195</h5>
                    </div>
                </div>
                <div class="bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope-open" style="color: #0b6623"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Mail Us Now</p>
                        <h5 class="mb-0">barvtcinfo@gmail.com | barabdinfo@gmail.com</h5>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58450.26168649595!2d90.40036441875326!3d23.706645636641202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3755b9d1c96908c5%3A0xd24dd32e80cad267!2srasulpur%20tower!3m2!1d23.7065725!2d90.441564!5e0!3m2!1sen!2sbd!4v1739931622988!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Appointment End -->



@endsection
