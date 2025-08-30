<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('backend.areas.list', compact('areas'));
    }

    public function create()
    {
        return view('backend.areas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'area_name' => 'required|max:255',
        ]);

        // Get the authenticated user
        $userId = auth()->id();

        // Store new area
        Area::create([
            'area_name' => $request->area_name,
            'created_by' => $userId,
            'updated_by' => $userId,
        ]);

        return redirect()->route('area.index')->with('success', 'Area created successfully!');
    }

    public function edit($id)
    {
        $area = Area::findOrFail($id);
        return view('backend.areas.create', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $request->validate([
            'area_name' => 'required|max:255',
        ]);

        $area->update(['area_name' => $request->area_name]);

        return redirect()->route('area.index')->with('success', 'Area updated successfully!');
    }

    public function destroy($id)
    {
        Area::destroy($id);
        return redirect()->route('area.index')->with('success', 'Area deleted successfully!');
    }
}


