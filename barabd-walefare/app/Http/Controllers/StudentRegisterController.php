<?php

namespace App\Http\Controllers;

use App\Models\StudentRegister;
use App\Models\Area;
use App\Models\VolunteerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;


class StudentRegisterController extends Controller
{
    /**
     * list
    */
    public function list(Request $request){
       
        if ($request->ajax()) {

            $data = StudentRegister::with(['volunteerType', 'area'])->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="' . route('volunteer.acceptace.destroy', $row->id) . '"}}" onclick="return confirm(\'Are you sure to delete?\')" class="edit btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
      
                            return $btn;
                    })
                    ->addColumn('name', function($row){
                        return $row->name ?? 'N/A';
                    })
                    ->addColumn('type', function($row){
                        return $row->volunteerType->volunteer_type ?? 'N/A';
                    })
                    ->addColumn('dob', function($row){
                        return $row->dob ?? 'N/A';
                    })
                    ->addColumn('phone', function($row){
                        return $row->mob_no ?? 'N/A';
                    })
                    ->addColumn('area', function($row){
                        return $row->area->area_name ?? 'N/A';
                    })
                    ->addColumn('nid', function($row){
                        return $row->nid_no ?? 'N/A';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('backend.volunteers.show_list');
    }
    /**
     * Store a newly created student registration.
     */
    protected function getModel()
    {
        return new StudentRegister();
    }

     public function create()
    {
        // $areas = Area::all();
        // $volunteers = VolunteerType::all();
        return view('front.layout.appointment');
    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => ['required', 'string'],
            'father_name' => ['required', 'string'],
            'mother_name' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'mob_no' => ['required', 'string'],
            'email' => ['nullable', 'string'],
            'nid_no' => ['required'],
            'area_id' => ['required', 'string'],
            'ward_no' => ['nullable', 'string'],
            'thana' => ['required'],
            'district' => ['required', 'string'],
            'volunteer_type_id' => ['required', 'string'],
            'present_address' => ['required'],
            'permanent_address' => ['required', 'string'],
            'image' => ['required'],
            'nid_image' => ['required'],
            'std_id_card_image' => ['required'],
            'guardian_image' => ['required'],
            'religion' => ['required'],
            'occupation' => ['required'],
            
        ]);


            $data                       = $this->getModel();
            $data->date                 = $request->date;
            $data->name                 = $request->name;
            $data->father_name          = $request->father_name;
            $data->mother_name          = $request->mother_name;
            $data->dob                  = $request->dob;
            $data->mob_no               = $request->mob_no;
            $data->email                = $request->email;
            $data->nid_no               = $request->nid_no;
            $data->area_id              = $request->area_id;
            $data->ward_no              = $request->ward_no;
            $data->thana                = $request->thana;
            $data->district             = $request->district;
            $data->volunteer_type_id    = $request->volunteer_type_id;
            $data->religion             = $request->religion;
            $data->occupation           = $request->occupation;

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

            $data->save();



        return redirect()->back()->with('success', 'Registration successful!');
        
    }

    /**
     * delete
    */
    public function destroy($id){

     
        $student = StudentRegister::find($id);

        if(!$student){
            abort(404, 'Student not found');
        }
        $student->delete();

        return redirect()->back()->with('success', 'Student deleted successfully!');

    }
}
