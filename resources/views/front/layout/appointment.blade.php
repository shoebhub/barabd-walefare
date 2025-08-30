<style>
    .input-border{
        border: 1px solid black !important;
    }

    .form-background{
        background-color: #ddeff7 !important;
    }

    .box-shadow{
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.88) !important;
    }

</style>


@php
    $volunteers = App\Models\VolunteerType::all();
    $areas = App\Models\Area::all();
@endphp

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
<div class="container-xxl py-5" style=" padding-bottom: 20px; border-radious: 5px;">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100">
            <div class="col-lg-8 mx-auto wow fadeInUp" data-wow-delay="0.5s">
                <div class="form-background rounded d-flex align-items-center p-5 box-shadow" style="color:black">
                    <form class="w-100 mb-5" action="{{ url('/volunteer/register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <label for="date">Date</label><span class="text-danger">*</span>
                                <input type="text" id="dateField" name="date" class="form-control input-border" placeholder="Date" style="height: 55px;" readonly>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="name">Your Name</label><span class="text-danger">*</span>
                                <input type="text" name="name" class="form-control input-border " placeholder="" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="father_name">Father's Name</label><span class="text-danger">*</span>
                                <input type="text" name="father_name" class="form-control input-border " placeholder="" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="mother_name">Mother's Name</label><span class="text-danger">*</span>
                                <input type="text" name="mother_name" class="form-control input-border " placeholder="" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="dob">Date of Birth</label><span class="text-danger">*</span>
                                <input type="date" name="dob" class="form-control input-border " required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="mob_no">Mobile No</label><span class="text-danger">*</span>
                                <input type="text" name="mob_no" class="form-control input-border " placeholder="" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control input-border " placeholder="" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="nid_no">NID No</label><span class="text-danger">*</span>
                                <input type="text" name="nid_no" class="form-control input-border " placeholder="" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="area_id">Select Area</label><span class="text-danger">*</span>
                                <select name="area_id" class="form-select " style="height: 55px;">
                                    <option selected>Select Area</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="ward">Ward No</label>
                                <input type="text" class="form-control input-border " placeholder="" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="district">District</label>
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control input-border " placeholder="" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="volunteer_type_id">Volunteer Type</label><span class="text-danger">*</span>
                                <select name="volunteer_type_id" class="form-select " style="height: 55px;">
                                    <option selected>Select Volunteer Type</option>
                                    @foreach ($volunteers as $volunteer)
                                        <option value="{{ $volunteer->id }}">{{ $volunteer->volunteer_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="image">Applicant Image</label><span class="text-danger">*</span>
                                <input type="file" name="image[]" multiple class="form-control input-border">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="nid_image">NID/Birth Certificate Image</label><span class="text-danger">*</span>
                                <input type="file" name="nid_image[]" multiple class="form-control input-border">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="std_id_card_image">Student Id Image</label>
                                <span class="text-danger">*</span>
                                <input type="file" class="form-control input-border " name="std_id_card_image[]" placeholder="Applicant Image" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <label for="present_address">Present Address</label><span class="text-danger">*</span>
                                <textarea name="present_address" class="form-control input-border " rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="permanant_address">Permanent Address</label><span class="text-danger">*</span>
                                <textarea name="permanant_address" class="form-control input-border " rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Join as a Volunteer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration Form End -->

<script>
    document.getElementById('dateField').value = new Date().toISOString().slice(0, 10);
</script>

@endsection