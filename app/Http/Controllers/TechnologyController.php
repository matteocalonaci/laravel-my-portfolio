<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technology = Technology::all();
        $data = [
            'technology' => $technology,
        ];
        return view('admin.technology.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technology.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$data = $request->validate(
    [
        'name' => 'required',
        'description' => 'required',
        'icon'=> 'required',
    ]
    );

    $newTechnology = new Technology();
    $newTechnology->fill($data);
    $newTechnology->save();
    return redirect()->route('admin.technology.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        $data =
        [
            'technology' => $technology,
        ];
        return view('admin.technology.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        $data =
        [
            'technology' => $technology,
        ];
        return view('admin.technology.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        $data = $request->all();

        $technology->name = $data['name'];
        $technology->description = $data['description'];
        $technology->icon = $data['icon'];

        $technology->save();
        return redirect()->route('admin.technology.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect()->route('admin.technology.index');
    }
}
