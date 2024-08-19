<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all();
        $technology = Technology::all();
        $data =
            [
                'project' => $project,
                'technology' => $technology
            ];
        return view('admin.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    $technology = Technology::all();
    $project = new Project();
    return view('admin.project.create', compact('technology', 'project'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required | min:5 |max:50',
                'image' => 'required |image',
                'description' => 'required |min:10',
                'github_url' => 'required',
                'technology_id' => 'required',
            ]

        );
        $data['image'] = $request->image;
        if($request->has('image')){
            $image_path = Storage::put('images', $request->image);
            $data['image'] = $image_path;
        }

        $newProject = new Project();
        $newProject->fill($data);
        $newProject->technology_id = $data['technology_id'];
        $newProject->save();
        return redirect()->route('admin.project.show', ['project'=> $newProject])->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $data =
            [
                'project' => $project,
            ];
        return view('admin.project.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $technology = Technology::all();
        $data =
            [
                'project' => $project,
                'technology' => $technology,
            ];
        return view('admin.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->technology_id = $data['technology_id'];
        $project->save();

        return redirect()->route('admin.project.show', ['project' => $project])->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.project.index')->with('success', 'Project deleted successfully');
    }
}
