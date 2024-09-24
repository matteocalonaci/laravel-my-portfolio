<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
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
        $language = Language::all();
        $data =
            [
                'project' => $project,
                'technology' => $technology,
                'language' => $language,
            ];
        return view('admin.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    $technology = Technology::all();
    $language = Language::all();
    $project = new Project();

    $data =
    [
        'technology' => $technology,
        'language' => $language,
        'project' => $project
        ];
    return view('admin.project.create', $data);
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
                "language" => "array",
                "language.*" => "exists:language,id"

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

         // Sync languages with the project
    $newProject->languages()->sync($request->input('languages', []));
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
        $language = Language::all();
        $data =
            [
                'project' => $project,
                'technology' => $technology,
                'language' => $language,

            ];
        return view('admin.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        // Validate the image input
        $request->validate([
            'image' => 'nullable|image',
        ]);

        // Store the new image in the images storage
        if ($request->hasFile('image')) {
            $image_path = Storage::put('images', $request->file('image'));
            $project->image = $image_path;
        }

        // Update the project details
        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->technology_id = $data['technology_id'];
        $project->save();

        // Sync languages with the project
        $project->languages()->sync($request->input('languages', []));

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
