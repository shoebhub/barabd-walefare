<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>B.A.R & Associates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('front/img/baralogo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href=" {{ url('front/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href=" {{ url('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href=" {{ url('front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    {{-- Navbar Start --}}
    @include("front.layout.navbar")
    {{-- Navbar End  --}}

    {{-- Content Start --}}
    @yield("content")
    {{-- Content End --}}


    <!-- Footer Start -->
    @include("front.layout.footer")
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('front/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ url('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('front/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ url('front/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ url('front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Template Javascript -->
    <script src="{{ url('front/js/main.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('#acceptannceFindBtn').click(function() {
                $('.hideArea').toggleClass('d-none');
            });
    
            $(document).on("click", '#searchAcceptance', function() {
                let acceptanceIdOrPhone = $('#acceptanceIdOrPhone').val();
                console.log("hit", acceptanceIdOrPhone);
    
                $.ajax({
                    url: "{{ route('student_acceptance.get-acceptance') }}",
                    type: "get",
                    data: {
                        _token: '{{ csrf_token() }}',
                        acceptanceIdOrPhone: acceptanceIdOrPhone
                    },
                    beforeSend:function(){
                        $('.acceptanceContainer').removeClass('d-none');
                            let html = `
                                 <div style="font-size:1.8rem" class='d-flex align-items-center justify-content-center'>
                                    <div class="spinner-border text-primary d-flex align-items-center justify-content-center" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div
                                </div>
                                `;
                            $('#acceptanceResult').html(html);
                    },
                    success: function(response) {
                        console.log(response);
    
                        if(response.message){
                            $('.acceptanceContainer').removeClass('d-none');
                            let html = `
                                <div style="font-size:1.8rem" class='d-flex align-items-center justify-content-center'>
                                    <h2>Record Not Found!</h2>
                                </div>
                                `;
                            $('#acceptanceResult').html(html);
                        }
    
                        if (response.status == "success") {
                            const {
                                name,
                                id
                            } = response.data;
                            $('.acceptanceContainer').removeClass('d-none');
                            let html = `
                                <div class='d-flex align-items-center justify-content-center'>
                                    <h1 style="font-size:2rem"><span class="text-secondary">Welcome, </span> ${name}</h1>
                                    <button class="btn btn-sm  mx-4" data-id=${id} id="downloadAccept" style="font-size:1.8rem; color:#fff; background: #d81e1e">Download</button>
                                </div>
                                `;
                                $('#acceptanceResult').html(html);
    
                            // Add event listener for download button
                            $('#downloadAccept').on('click', function() {
                                let acceptanceId = $(this).data('id');
                                window.location.href =
                                    "{{ route('student_acceptance.download', '') }}/" +
                                    acceptanceId;
                            });
    
                        } else {
                            let html = `
                                <div style="font-size:1.8rem" class='d-flex align-items-center justify-content-center'>
                                    <h2>Record Not Found!</h2>
                                </div>
                                `;
                            $('#acceptanceResult').html(html);
                        }
    
                    },
                    error: function(error) {
                        console.log("error", error);
                    }
                });
    
    
            });
    
        });
       
    </script>

@if (session()->has('success'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "500",
        "hideDuration": "500",
    }
    toastr.success("{{ session('success') }}  ");
</script>
@endif


@if (session()->has('info'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "500",
        "hideDuration": "500",
    }
    toastr.info("{{ session('info') }}  ");
</script>
@endif


@if (session()->has('fail'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
    }

    toastr.warning("{{ session('fail') }}  ");
</script>
@endif
</body>

</html>