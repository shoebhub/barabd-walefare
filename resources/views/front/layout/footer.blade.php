<style>
    .custom-width{
        width: 14.333%;
    }

    .footerColor{
        background-color: #d73f47;
    }
    @media (max-width: 991px) { 
        .custom-width {
            /* width: 33.33333%;  */
            width: 60% !important; 
        }
    }
</style>
<div class="container-fluid text-light footer mt-5 pt-5 wow fadeIn footerColor" data-wow-delay="0.1s">
    <div class="container py-3 justify-content-between">
        <div class="row g-5 justify-content-between">
            <!-- Address Section -->
            <div class="col-lg-4 col-md-4 col-12 text-start">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rasulpur Tower(5th Floor), 49 Rasulpur, Dania, Jatrabari, Dhaka-1236 (Head Office)</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>175, Shahid Syed Nazrul Islam Sarani, Skylark Point, 6th Floor, Dhaka-1000 (Corporate Office)</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+8801975363707, +8801313714331, +02-7542195</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>barvtcinfo@gmail.com | barabdinfo@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle mx-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
    
            <!-- Services Section -->
            <div class="col-lg-4 col-md-4 col-12 text-start">
                <h5 class="text-light mb-4">Our Companies</h5>
                <a class="btn btn-link" href="https://barabdonline.xyz/">Barabd</a>
            </div>
    
            <!-- Quick Links Section -->
            <div class="col-lg-4 col-md-4 col-12 text-start custom-width">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('aog') }}">Areas of Giving</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('appointment') }}">Join as a Volunteer</a>
            </div>
        </div>
    </div>
    
    
    

    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Barabd</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="border-bottom"><span>Barabd</span></a>
                </div>
            </div>
        </div>
    </div>

</div>