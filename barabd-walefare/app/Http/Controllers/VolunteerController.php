<?php

namespace App\Http\Controllers;

use App\Models\VolunteerType;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = VolunteerType::all();
        return view('backend.volunteers.list', compact('volunteers'));
    }

    public function create()
    {
        return view('backend.volunteers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'volunteer_type' => 'required|max:255',
        ]);

        // Get the authenticated user
        $userId = auth()->id();

        // Store new area
        VolunteerType::create([
            'volunteer_type' => $request->volunteer_type,
            'created_by' => $userId,
            'updated_by' => $userId,
        ]);

        return redirect()->route('volunteer.index')->with('success', 'Volunteer Type created successfully!');
    }

    public function edit($id)
    {
        $volunteer = VolunteerType::findOrFail($id);
        return view('backend.volunteers.create', compact('volunteer'));
    }

    public function update(Request $request, VolunteerType $volunteer)
    {
        $request->validate([
            'volunteer_type' => 'required|max:255',
        ]);

        $volunteer->update(['volunteer_type' => $request->volunteer_type]);

        return redirect()->route('volunteer.index')->with('success', 'Volunteer Type updated successfully!');
    }

    public function destroy($id)
    {
        VolunteerType::destroy($id);
        return redirect()->route('volunteer.index')->with('success', 'Volunteer Type deleted successfully!');
    }
}

