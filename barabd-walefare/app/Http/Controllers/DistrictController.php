<?php

namespace App\Http\Controllers;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    //
    public function index()
    {
        $districts = District::all();
        return view('backend.districts.list', compact('districts'));
    }

    public function create()
    {
        return view('backend.districts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        // Get the authenticated user
        $userId = auth()->id();

        // Store new area
        District::create([
            'name' => $request->name,
            'created_by' => $userId,
            'updated_by' => $userId,
        ]);

        return redirect()->route('district.index')->with('success', 'District created successfully!');
    }

    public function edit($id)
    {
        $district = District::findOrFail($id);
        return view('backend.districts.create', compact('district'));
    }

    public function update(Request $request, District $district)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $district->update(['name' => $request->name]);

        return redirect()->route('district.index')->with('success', 'District updated successfully!');
    }

    public function destroy($id)
    {
        District::destroy($id);
        return redirect()->route('district.index')->with('success', 'District deleted successfully!');
    }
}
