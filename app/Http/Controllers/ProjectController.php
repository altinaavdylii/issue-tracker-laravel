<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index');
    }
    public function destroy($id)
{
    $project = Project::findOrFail($id);
    $project->delete();

    return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
}
}