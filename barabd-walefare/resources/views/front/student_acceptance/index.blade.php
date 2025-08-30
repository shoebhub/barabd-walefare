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
<section class="content" style="margin-top: 50px; margin-bottom: 100px">
    <div class="container">
        @if (Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4>{{Session::get('success_message')}}</h4>
            {{-- <button type="button btn btn-danger" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> --}}
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Volunteer Information</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route("student_acceptance.store") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date">Date <span class="text-danger">*</span></label>
                                        <input type="text" name="date" class="form-control date_plugin" placeholder="dd-mm-yyyy" value="{{date('d-m-Y')}}" max="{{ date('Y-m-d') }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Ex: Name" required>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="father_name">Father Name <span class="text-danger">*</span></label>
                                        <input type="text" name="father_name" id="father_name" class="form-control @error('father_name') is-invalid @enderror" placeholder="Ex: Father Name" required>
                                        @error('father_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mother_name">Mother Name <span class="text-danger">*</span></label>
                                        <input type="text" name="mother_name"  id="mother_name" class="form-control @error('mother_name') is-invalid @enderror" placeholder="Ex: Mother Name" value="{{ old('mother_name') }}" />
                                        @error('mother_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control @error('dob') is-invalid @enderror" />
                                        @error('dob')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mob_no">Mobile No <span class="text-danger">*</span></label>
                                        <input type="text" name="mob_no" id="mob_no" class="form-control @error('mob_no') is-invalid @enderror" value="{{ old('mob_no') }}" />
                                        @error('mob_no')
                                         <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="volunteer_type_id">Select Volunteer <span class="text-danger">*</span></label>
                                    <select class="select2 form-control" name="volunteer_type_id" >
                                        <option value="">Select Volunteer Type</option>
                                        @foreach ($volunteers as $volunteer)
                                        <option value="{{ $volunteer->id }}">{{ $volunteer->volunteer_type }}</option>
                                        @endforeach
                                    </select>

                                    @error('volunteer_type_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nid_no">NID / Birth Certificate No <span class="text-danger">*</span></label>
                                        <input type="text" name="nid_no" id="nid_no" class="form-control @error('nid_no') is-invalid @enderror" />
                                        @error('nid_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="religion">Religion <span class="text-danger">*</span></label>
                                        <input type="text" name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror" />
                                        @error('religion')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="occupation">Occupation <span class="text-danger">*</span></label>
                                        <input type="text" name="occupation" id="occupation" class="form-control @error('occupation') is-invalid @enderror" />
                                        @error('occupation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="present_address">Present Address <span class="text-danger">*</span></label>
                                        <textarea name="present_address" class="form-control @error('present_address') is-invalid @enderror" ></textarea>
                                        @error('present_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="permanent_address">Permanent Address <span class="text-danger">*</span></label>
                                        <textarea name="permanent_address" class="form-control"></textarea>
                                        @error('permanent_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="area_name">Select Area <span class="text-danger">*</span></label>
                                    <select class="select2 form-control" name="area_name" >
                                        <option value="">Select Area</option>
                                        @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                                        @endforeach
                                    </select>

                                    @error('volunteer_type_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ward_no">Ward No</label>
                                        <input type="text" name="ward_no" id="ward_no" class="form-control @error('ward_no') is-invalid @enderror" placeholder="Ex: Ward No">
                                        @error('ward_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="thana">Thana</label>
                                        <input type="text" name="thana" id="thana" class="form-control" placeholder="Ex: Thana">

                                        @error('thana')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="district_id">Select District <span class="text-danger">*</span></label>
                                    <select class="select2 form-control" name="district_id" required>
                                        <option value="">Select District</option>
                                        @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('district_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="image">Applicant Image <span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control" accept="image/png, image/jpeg" required>
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="nid_image">NID Card / Birth Certificate Image <span class="text-danger">*</span></label>
                                    <input type="file" name="nid_image" class="form-control" accept="image/png, image/jpeg" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="std_id_card_image">Student ID Card Image <span class="text-danger">*</span></label>
                                    <input type="file" name="std_id_card_image" class="form-control" accept="image/png, image/jpeg" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="guardian_image">Guardian Image <span class="text-danger">*</span></label>
                                    <input type="file" name="guardian_image" class="form-control" accept="image/png, image/jpeg" required>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Registration Form End -->

@endsection
