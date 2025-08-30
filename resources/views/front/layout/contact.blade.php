@extends("front.layout.layout")
@section("content")
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url('{{ asset('front/img/Untitled-8.jpg') }}') top center no-repeat; height: 350px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                {{-- <img src="{{ asset('front/img/aboutus.png') }}" alt="About Us Image" class="img-fluid rounded" style="height: 200px; width: 400px;"> --}}
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-map-marker-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Address</p>
                        <h5 class="mb-0">175, Shahid Syed Nazrul Islam Sarani, Skylark Point, 6th Floor, Dhaka-1000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Call Us Now</p>
                        <h5 class="mb-0">+8801975363707, +8801313714331, +02-7542195</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Mail Us Now</p>
                        <h5 class="mb-0">barvtcinfo@gmail.com | barabdinfo@gmail.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded p-5">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Contact Us</p>
                    <h1 class="mb-4">Have Any Query? Please Contact Us!</h1>
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
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
<!-- Contact End -->

@endsection