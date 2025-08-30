<?php

namespace App\Http\Controllers\Front;

use Exception;
use Carbon\Carbon;
use App\Models\Area;
use App\Models\District;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\VolunteerType;
use App\Models\StudentRegister;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class WelfareController extends Controller
{
    //
    public function welfare(){
        return view('front.layout.welfare');
    }

    public function barabdWelfare(){
        return view('front.layout.welfare_brabd_index');
    }

    public function barabdWelfareAppy(){
        return view('front.layout.welfare_brabd');
    }


    public function verifyPhoneNumber(Request $request){     

        $request->validate([
            'phone' => 'required|numeric|digits:11'
        ]);
        
        $phone = StudentRegister::where('mob_no', $request->phone)->first();

        if(!empty($phone)){
            return redirect()->back()->with("actionFail", "{$request->phone} already exists");
        }

        // Redirect to verification route with OTP
        return redirect()->route("student_acceptance.verify.index");

    }

    public function verifyOtpWelfareIndex(){       
        // return view('front.student_acceptance.index');
        $districts = District::all();
        $volunteers = VolunteerType::all();
        $areas = Area::all();
        return view("front.student_acceptance.index", compact('districts', 'volunteers', 'areas'));
    }


    public function getAcceptanceLetter(Request $request){
         // Check if 'acceptanceIdOrPhone' is present and not empty
    if ($request->has('acceptanceIdOrPhone') && !empty($request->input('acceptanceIdOrPhone'))) {

        // Search for the record by acceptance ID or phone
        $data = StudentRegister::
                 Where('mob_no', $request->acceptanceIdOrPhone)
                ->first();

        // If no record is found, return an error response
        if (!$data) {
            return response()->json([
                'status' => 'error',
                'message' => 'Acceptance record not found'
            ]);
        }

        // If the record is found, return a success response with the data
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    } else {
        // If the input is invalid, return an error response
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid input'
        ]);
    }
    }


    public function downloadAcceptance($id)
    {
        
    $acceptance = StudentRegister::where('id', $id)->first();

    // dd($acceptance);

    if (!$acceptance) {
        abort(404, 'Acceptance record not found');
    }

    // Assuming 'pdf.student_acceptance' expects an array of data
    return view('front.pdf.student_pdf', compact('acceptance'));
    }


    public function store(Request $request){

        $this->validate($request, [
            'name' => ['required'],
            'father_name' => ['required'],
            'area_name' => ['required'],
            'ward_no' => ['required'],
            'thana' => ['required'],
            'mob_no' => ['required', 'digits:11', 'unique:student_registers,mob_no'],
            'mother_name' => ['required'],
            'present_address' => ['required'],
            'permanent_address' => ['required'],
            'email' => ['required'],
            'nid_no' => ['required'],
            'volunteer_type_id' => ['required'],
            'religion' => ['required'],
            'occupation' => ['required'],
        ]);


    
            if ($request->filled('date')) {
                $request->merge(['date' => Carbon::parse($request->date)->format('Y-m-d')]);
            }
    
            if ($request->filled('dob')) {
                $request->merge(['dob' => Carbon::parse($request->dob)->format('Y-m-d')]);
            }
            try {
                if($request->date > date('Y-m-d')){
                    return back()->with('failed', "Sorry! Your Selected date is Getter than today")->withInput();
                }
                if( Carbon::parse($request->date)->format('Y') < 2000){
                    return back()->with('failed', "Sorry! Your Cann't Select date is Before 2000")->withInput();
                }

               
                DB::beginTransaction();
    
                $checker = StudentRegister::where('mob_no', $request->mob_no)
                ->orWhere(function($query) use ($request) {
                    $query->where('email', $request->email)
                          ->where('nid_no', $request->nid_no);
                })
                ->first();  
                
                
  
    
                // Check if a record is found
                if ($checker) {
                    return back()->with('failed', "Already Exists")->withInput();
                }
                 
                $data                           = new StudentRegister();
                $data->date                     = $request->date;
                $data->name                     = $request->name;    
                $data->father_name              = $request->father_name;
                $data->mother_name              = $request->mother_name;    
                $data->dob                      = $request->dob;
                $data->mob_no                   = $request->mob_no;
             
                $data->email                    = $request->email;
                $data->nid_no                   = $request->nid_no;
                $data->area_id                  = $request->area_id;
                $data->ward_no                  = $request->ward_no;
                $data->thana                    = $request->thana;
                $data->district                 = $request->district_id;

                $data->volunteer_type_id        = $request->volunteer_type_id;
           
                $data->area_id                  = $request->area_name;    

                $data->present_address          = $request->present_address;
                $data->permanant_address        = $request->permanent_address;
                $data->religion                 = $request->religion; 
                $data->occupation               = $request->occupation; 

              
    
                if($request->hasFile('image')){
                    $extension = $request->file('image')->extension();
                    $path = $request->file('image')->storeAs('student', $data->name.'_'.Str::random(3) .'.'. $extension, "public");
                    $data->image = $path;
                }
                if($request->hasFile('nid_image')){
                    $extension = $request->file('nid_image')->extension();
                    $path = $request->file('nid_image')->storeAs('student', $data->name.'_'.Str::random(3) .'.'. $extension, "public");
                    $data->nid_image = $path;
                }
                if($request->hasFile('std_id_card_image')){
                    $extension = $request->file('std_id_card_image')->extension();
                    $path = $request->file('std_id_card_image')->storeAs('student', $data->name.'_'.Str::random(3) .'.'. $extension, "public");
                    $data->std_id_card_image = $path;
                }
                
                if($request->hasFile('guardian_image')){
                    $extension = $request->file('guardian_image')->extension();
                    $path = $request->file('guardian_image')->storeAs('student', $data->name.'_'.Str::random(3) .'.'. $extension, "public");
                    $data->guardian_image = $path;
                }

                               
                $token = 'barabd'.date('dmy').$data->id;
                $data->acceptance_id = $token; 
                $data->save();

                $message = "Congratulation! Successfully Submitted Your Form. Your Apply Form ID (Please Note This ID) :  " . $data->acceptance_id;
    
                DB::commit();
                return redirect()->route('student_acceptance.verify.index')->with("success_message", $message);
            } catch (Exception $e) {
                DB::rollBack();
                Log::error('Error: ' . $e->getMessage());
                return back()->with('fail', $e->getMessage())->withInput();
            }
    }


    
}
