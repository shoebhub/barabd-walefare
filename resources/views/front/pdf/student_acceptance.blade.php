<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .padhead {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .padhead img {
            display: block;
            width: 100%;
            height: auto;
        }
        .container {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.9); /* Background for readability */
            padding: 20px;
            border-radius: 10px;
        }

        .image-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .image-container img {
            height: 255px;
            width: 250px;
            margin: 10px;
        }
        .form-header {
            text-align: center;
            font-weight: bold;
            color: red;
            margin-bottom: 20px;
        }
        .form-section {
            border-bottom: 2px solid #007bff;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        .image-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: nowrap;
        }
        .image-container img {
            width: 120px;
            height: 150px;
            object-fit: cover;
        }

        .image-contain {
            display: flex;
            justify-content: center; /* Centers horizontally */
            align-items: center; /* Centers vertically */
            height: 100%; /* Optional: Ensures full height of the container */
        }
        
        .nid img{
            width: 300px;
            height: 200px;
        }

        .std img{
            width: 200px;
            height: 300px;
        }

        @media print {
            .page-break { 
                page-break-before: always; /* Forces a new page when printing */
            }
        }
        
    </style>

</head>

<body>
    <div class="padhead">
        <img src="{{ asset('front/img/padhead.jpeg') }}" alt="Padhead">
    </div>
    <div class="container">
        @php
            // Ensure the stored path does not have an extra backslash
            $imagePath = str_replace('\/', '/', $acceptance->image);
            $nidImagePath = str_replace('\/', '/', $acceptance->nid_image);
            $stdIdImagePath = str_replace('\/', '/', $acceptance->std_id_card_image);

            // Check if the file exists in the "student" folder inside the public disk
            $avatarExists = Storage::disk('public')->exists($imagePath);
            $nidExists = Storage::disk('public')->exists($nidImagePath);
            $stdIdExists = Storage::disk('public')->exists($stdIdImagePath);

            // Generate the correct URL
            $avatar_path = $avatarExists ? asset('storage/' . $imagePath) : "https://via.placeholder.com/90";
            $nid_path = $nidExists ? asset('storage/' . $nidImagePath) : "https://via.placeholder.com/90";
            $std_id_path = $stdIdExists ? asset('storage/' . $stdIdImagePath) : "https://via.placeholder.com/90";

            // Fetch related database values
            $districtName = DB::table('districts')->where('id', $acceptance->district_id)->value('name');
            $areaName = DB::table('areas')->where('id', $acceptance->area_id)->value('area_name');
            $volunteerType = DB::table('volunteer_types')->where('id', $acceptance->volunteer_type_id)->value('volunteer_type');
        @endphp


        <h2 class="form-header text-center">Volunteer Form</h2>

        <div class="image-container">
            <img src="{{ $avatar_path }}" alt="Profile Photo">
            
        </div>

        <div class="form-section">
            <div class="row">
                <div class="col-md-12"><strong>Volunteer No:</strong> {{ $acceptance->acceptance_id ?? " " }}</div>
            </div>
            <div class="row">
                <div class="col-md-6"><strong>Date:</strong> {{ \Carbon\Carbon::parse($acceptance->date)->format('d-m-Y') ?? " " }}</div>
            </div>            
        </div>

        <div class="row">
            <div class="col-md-12"><strong>Father’s Name:</strong> {{ $acceptance->father_name ?? " " }}</div>
        </div>
        <div class="row">
            <div class="col-md-12"><strong>Mother’s Name:</strong> {{ $acceptance->mother_name ?? " " }}</div>
        </div>
        
        <div class="row">
            <div class="col-md-12"><strong>Date of Birth:</strong> {{ \Carbon\Carbon::parse($acceptance->dob)->format('d-m-Y') ?? " " }}</div>
        </div>
        <div class="row">
            <div class="col-md-12"><strong>Mobile No:</strong> {{ $acceptance->mob_no ?? " " }}</div>
        </div>
        
        <div class="row">
            <div class="col-md-12"><strong>Email:</strong> {{ $acceptance->email ?? " " }}</div>
        </div>
        <div class="row">
            <div class="col-md-12"><strong>NID No:</strong> {{ $acceptance->nid_no ?? " " }}</div>
        </div>
        
        <div class="form-section">
            <div class="row">
                <div class="col-md-12"><strong>Area:</strong> {{ $areaName }}</div>
            </div>
            <div class="row">
                <div class="col-md-12"><strong>Ward No:</strong> {{ $acceptance->ward_no ?? " " }}</div>
            </div>
            <div class="row">
                <div class="col-md-12"><strong>District:</strong> {{ $districtName }}</div>
            </div>
            <div class="row">
                <div class="col-md-12"><strong>Volunteer Type:</strong> {{ $volunteerType }}</div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12"><strong>Present Address:</strong> {{ $acceptance->present_address ?? " " }}</div>
        </div>
        <div class="row">
            <div class="col-md-12"><strong>Permanent Address:</strong> {{ $acceptance->permanant_address ?? " " }}</div>
        </div>
        
    </div>


    <div class="padhead page-break">
        <img src="{{ asset('front/img/padhead.jpeg') }}" alt="Padhead">
    </div>
    <div class="container">

        <h2 class="form-header text-center">Volunteer Form</h2>

        <h5 class="text-center">NID / Birth Certificate</h5>

        <div class="image-contain nid">
            <img src="{{ $nid_path }}" alt="NID Photo">
        </div>


        <h5 class="text-center mt-5">Student ID Card </h5>

        <div class="image-contain std">
            <img src="{{ $std_id_path }}" alt="Student Id Photo">
        </div>

        
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function () {
            window.print();
        }
    </script>
</body>
</html>


