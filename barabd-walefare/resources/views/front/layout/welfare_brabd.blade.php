@extends("front.layout.layout")
@section("content")

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url('{{ asset('front/img/Untitled-9.jpg') }}') top center no-repeat; height: 350px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Registration Form Start -->
<section class="" style="margin-top: 100px; margin-bottom:100px">
    <div class="container">
        <div class="row" style="font-size: 1.6rem!important">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4 style="font-size: 2rem!important; text-align: center;"><b>If You New To Registration !!!</b> <br> Fill Up Below Mobile Number Field <br> & <br> Continue to NEXT</h4>
                    </div>

                    <div class="card-body">
                        @if(session('actionFail'))
                         <div class="alert alert-danger" style="font-size: 1.6rem!important; text-align: center;">
                                {{ session('actionFail') }}
                            </div>
                        @endif

                        @if(session('success_message'))
                        <div class="alert alert-info" style="font-size: 1.6rem!important; text-align: center;">
                               {{ session('success_message') }}
                           </div>
                       @endif

                        @if(session('actionSuccess'))
                        <div class="alert alert-success" style="font-size: 1.6rem!important; text-align: center;">
                               {{ session('actionSuccess') }}
                           </div>
                       @endif
                        <form action="{{ route('student_acceptance.verify.phone') }}" method="POST">
                            @csrf

                            <div class="input-group mb-3">                               
                                <input type="text" name="phone" id="phone"
                                 class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Enter your mobile number" style="font-size: 1.8rem !important"
                                    />
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                    style="font-size: 2rem !important; background-color: #19243f; color: #fff;">Next</button>
                                </div>

                                
                                @error('phone')
                                <div class="invalid-feedback" style="font-size: 1.6rem!important;">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>

                            {{-- <div class="form-group">
                                <label for="phone" style="font-size: 1.6rem!important">Mobile Number</label>
                                <input type="text" name="phone" id="phone"
                                 class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Enter your mobile number" style="font-size: 1.8rem !important"
                                    />

                                    @error('phone')
                                    <div class="invalid-feedback" style="font-size: 1.6rem!important;">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="font-size: 2rem !important; background-color: #19243f; color: #fff;">Next</button>
                            </div> --}}

                           <div class="mt-5 text-center bg-light">
                            <small style="text-lead"><span class="fw-bold">Note:</span> If you already registred, please click the button <span id="findDoc" class="btn btn-sm btn-danger"><a class="text-white" href="{{ url('barabd-welfare') }}">Find My Commitment Form</a></span>
                           </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="col-12 mt-4">
                    <div class="alert alert-info" style="font-size: 1.6rem !important; text-align: center;">
                        We will send a verification code to your mobile number.
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- Registration Form End -->

<script>
    document.getElementById('dateField').value = new Date().toISOString().slice(0, 10);
</script>

@endsection