<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image',
            'skill_id' => 'required'
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image')->store('projects');
            Project::create([
                'name' => $request->name,
                'image' => $image,
                'project_url' => $request->project_url,
                'skill_id' => $request->skill_id
            ]);

            return  Redirect::route('projects.index')->with(['message' => 'Projet créé !', 'class' => 'flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg']);
        }

    return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $image = $project->image;
        $request->validate([
            'name' => 'required',
            'skill_id' => 'required'
        ]);

        if($request->hasFile('image')) {
            Storage::delete($project->image);
            $image = $request->file('image')->store('skills');
        }

        $project->update([
            'name' => $request->name,
            'image' => $image,
            'project_url' => $request->project_url,
            'skill_id' => $request->skill_id,
        ]);

        return Redirect::route('projects.index')->with(['message' => 'Projet édité !', 'class' => 'flex p-4 mb-4 text-sm bg-blue-100  text-blue-700 rounded-lg']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();

        return Redirect::route('projects.index')->with(['message' => 'Projet supprimé !', 'class' => 'flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg']);
    }
}
