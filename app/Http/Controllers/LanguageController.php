<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $language = Language::all();
        $data =
        [
            'language' => $language,
        ];
        return view('admin.language.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $language = Language::all();
        $data =
        [
            'language' => $language,
        ];
        return view('admin.language.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sono i dati che attivano dal form
        $data = $request->validate([
            "name" => "required|min:5|max:50",
            "description" => "required|min:10|max:2000",
            "icon" => "required|min:5|max:50",
        ]);
        $newLanguage = new Language();
        $newLanguage->fill($data);
        $newLanguage->save();
        return redirect()->route('admin.language.show', ['language' => $newLanguage]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        $data =
        [
            'language' => $language,
        ];
        return view('admin.language.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        $data =
        [
            'language' => $language,
        ];
        return view('admin.language.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $data = $request->all();

        $language->name= $data['name'];
        $language->description= $data['description'];
        $language->icon= $data['icon'];

        $language->save();

        return redirect()->route('admin.language.show', ['language'=> $language] );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return redirect()->route('admin.language.index');
    }
}
