<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আবেদন পত্র</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'SolaimanLipi', sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            background: #fff;
            padding: 20px;
            margin: auto;
            border: 1px solid #ddd;
        }
        .image-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .image-box {
            width: 100px;
            height: 100px;
            /* border: 1px solid black; */
        }
        .content {
            text-align: justify;
        }
        .signatures {
            display: flex;
            justify-content: space-between;
            margin-top: 100px;
        }
        .signature {
            text-align: center;
            font-weight: bold;
            width: 50%;
        }
        @media print {
            body {
                background: none;
            }
            .container {
                max-width: 100%;
                margin: 0;
                padding: 10px;
                border: none;
            }
            .signatures {
                page-break-inside: avoid;
            }
            .row {
                display: flex !important;
                flex-wrap: nowrap !important; /* Prevent wrapping */
            }
            .col-md-6 {
                flex: 0 0 50% !important; /* Ensure equal width */
                max-width: 50% !important;
            }
                }
    </style>
</head>
<body>
    <div class="container">

        @php
            // Ensure the stored path does not have an extra backslash
            $imagePath = str_replace('\/', '/', $acceptance->image);
            $nidImagePath = str_replace('\/', '/', $acceptance->nid_image);
            $stdIdImagePath = str_replace('\/', '/', $acceptance->std_id_card_image);
            $guardianImagePath = str_replace('\/', '/', $acceptance->guardian_image);

            // Check if the file exists in the "student" folder inside the public disk
            $avatarExists = Storage::disk('public')->exists($imagePath);
            $nidExists = Storage::disk('public')->exists($nidImagePath);
            $stdIdExists = Storage::disk('public')->exists($stdIdImagePath);
            $guardianExists = Storage::disk('public')->exists($guardianImagePath);

            // Generate the correct URL
            $avatar_path = $avatarExists ? asset('storage/' . $imagePath) : "https://via.placeholder.com/90";
            $nid_path = $nidExists ? asset('storage/' . $nidImagePath) : "https://via.placeholder.com/90";
            $std_id_path = $stdIdExists ? asset('storage/' . $stdIdImagePath) : "https://via.placeholder.com/90";
            $guardian_path = $guardianExists ? asset('storage/' . $guardianImagePath) : "https://via.placeholder.com/90";

            // Fetch related database values
            $districtName = DB::table('districts')->where('id', $acceptance->district_id)->value('name');
            $areaName = DB::table('areas')->where('id', $acceptance->area_id)->value('area_name');
            $volunteerType = DB::table('volunteer_types')->where('id', $acceptance->volunteer_type_id)->value('volunteer_type');
        @endphp


        <div class="image-container">
            <img class="image-box" src="{{ $avatar_path }}" alt="Profile Photo">
            <img class="image-box" src="{{ $guardian_path }}" alt="Guardian Photo">
        </div>
        <h3 class="text-center" style="margin-bottom: 25px;"><u>আবেদন পত্র</u></h3>
        <div class="content">

            
            {{-- <div class="row">
                <div class="col-md-6"><strong>আমি: </strong> {{ $acceptance->name ?? " " }}</div>
                <div class="col-md-6"><strong>পিতা: </strong> {{ $acceptance->father_name ?? " " }}</div>
            </div>
            <div class="row">
                <div class="col-md-6"><strong>মাতা: </strong> {{ $acceptance->name ?? " " }}</div>
                <div class="col-md-6"><strong>মোবাইল নং: </strong> {{ $acceptance->father_name ?? " " }}</div>
            </div>
            <div class="row">
                <div class="col-md-6"><strong>বর্তমান ঠিকানা: </strong> {{ $acceptance->name ?? " " }}</div>
                <div class="col-md-6"><strong>স্থায়ী ঠিকানা: </strong> {{ $acceptance->father_name ?? " " }}</div>
            </div>
            <div class="row">
                <div class="col-md-6"><strong>জাতীয় পরিচয় পত্র নং: </strong> {{ $acceptance->name ?? " " }}</div>
                <div class="col-md-6"><strong>ই-মেইল: </strong> {{ $acceptance->father_name ?? " " }}</div>
            </div>
            <div class="row">
                <div class="col-md-5"><strong>ধর্ম: </strong> {{ $acceptance->name ?? " " }}</div>
                <div class="col-md-5"><strong>পেশা: </strong> {{ $acceptance->father_name ?? " " }}</div>
                <div class="col-md-2"><strong>জাতীয়তা: </strong> বাংলাদেশী</div>
            </div> --}}



            <p>আমি: .....{{ $acceptance->name ?? " " }}..... , পিতা: .....{{ $acceptance->father_name ?? " " }}....,</p>
            <p>মাতা: .....{{ $acceptance->mother_name ?? " " }}......, মোবাইল নং: ......{{ $acceptance->mob_no ?? " " }}......</p>
            <p>বর্তমান ঠিকানা: ......{{ $acceptance->present_address ?? " " }}......</p>
            <p>স্থায়ী ঠিকানা: ......{{ $acceptance->permanant_address ?? " " }}...... </p>
            <p>জাতীয় পরিচয় পত্র নং: ......{{ $acceptance->nid_no ?? " " }} ......, ই-মেইল: ......{{ $acceptance->email ?? " " }}......</p>
            <p>ধর্ম: ......{{ $acceptance->religion ?? " " }}......, পেশা: ......{{ $acceptance->occupation ?? " " }}......, জাতীয়তা: বাংলাদেশী</p>

            <p class="mt-3">
                এই মর্মে আমার সৃষ্টি কর্তার উপর ভরসা রেখে কুরআন শরীফ বা নিজ ধর্মের সৃষ্টি কর্তার কিতাবের উপর শপথ করে 
                (বার এন্ড এসোসিয়েটস) বখতিয়ার আহমেদ রনী এন্ড এসোসিয়েটস লিঃ নামীয় প্রতিষ্ঠানের স্বেচ্ছাসেবক / নিরাপত্তা কর্মী হিসাবে 
                নিযুক্ত হইলাম । আমার এই সিদ্ধান্ত স্বেচ্ছায় সজ্ঞানে, অন্যের বিনা প্ররোচনায়, বৈধ অভিভাবকের সম্মতিক্রমে নিয়েছি । 
                অদ্য হইতে যতদিন আমি বার এন্ড এসোসিয়েটস এর সদস্য থাকিব, ঠিক ততদিন  বাংলাদেশের প্রচলিত আইন মেনে চলিব এবং 
                বার এন্ড এসোসিয়েটস যতদিন বৈধ কাজ করিবে তত দিন তাদের ডাকের সাথে সাথে তাদের নির্দেশনা মেনে চলিব।
            </p>
            <ul>
                <li>জাতীয় পরিচয় পত্র / জন্ম নিবন্ধন এর কপি।</li>
                <li>ছাত্র আইডি কার্ড এর কপি (যদি ছাত্র/ছাত্রী হয়)।</li>
                <li>আবেদনকারীর ছবি এবং পরিচয়কারী অভিজ্ঞতার ছবি।</li>
                <li>বর্তমান ঠিকানার ইউনিয়ন বিলের কপি।</li>
            </ul>
        </div>
        <div class="signatures">
            <div class="signature">
                <p>নিবেদক</p>
                <p>আবেদনকারীর স্বাক্ষর</p>
            </div>
            <div class="signature">
                <p>অনুমোদন প্রদানকারী</p>
                <p>অভিভাবক এর স্বাক্ষর</p>
            </div>
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
