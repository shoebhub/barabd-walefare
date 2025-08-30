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

        <div class="row" style="font-size: 2rem!important">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 style="font-size: 2.5rem!important; text-align: center;">Welcome to Barabd Welfare Foundation</h3>
                    </div>

                    @if(session('success_message'))
                     <div class="alert alert-info my-2" style="font-size: 1.6rem!important; text-align: center;">
                        {{ session('success_message') }}
                     </div>
                    @endif

                    <div class="card-body">
                        <div class="fullWidthBtn d-flex align-items-center justify-content-center">
                            <a type="button" style="font-size: 2rem !important; color:#fff; background: #d81e1e"
                                class="btn btn-lg btn-block"
                                href="{{ url('/barabd-welfare-apply') }}">Apply Form</a>
                            &nbsp; &nbsp;
                            <button style="font-size: 2rem !important; background: #219e53; color:#fff;" id="acceptannceFindBtn" type="button"
                                class="btn btn-primary btn-lg btn-block" data-toggle="tooltip" data-placement="top"
                                title="Find My Acceptance">
                                Find My Commitment Form
                            </button>
                        </div>
                    </div>

                    <div class="hideArea p-4 d-none">
                        <div class="card">
                            <div class="card-body">
                                    <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-md-6">
                                        <input style="font-size: 1.8rem !important" class="form-control" type="text"
                                            placeholder="Phone Number" id="acceptanceIdOrPhone" />
                                    </div>

                                    <div class="col-md-2">
                                        <button style="font-size: 1.8rem !important; color:#fff; background: #19243f" id="searchAcceptance"
                                            type="button" class="btn btn-secondary btn-lg">Find</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row d-flex align-items-center justify-content-center shadow-sm">

                            <div class="col-12 acceptanceContainer d-none my-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="acceptanceResult"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Registration Form End -->


@endsection

