<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Project;
use Illuminate\Http\Request;

class IssueController extends Controller
{
   public function index()
{
    $projects = Project::all();
    $issues = Issue::with('project', 'tags')->get();

    return view('issues.index', compact('projects', 'issues'));
}
    public function create()
    {
        $projects = Project::all();
        return view('issues.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required',
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'required',
        ]);

        Issue::create($request->all());

        return redirect()->route('issues.index');
    }
}