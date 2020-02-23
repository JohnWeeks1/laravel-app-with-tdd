<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Project::create([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);

        return redirect('/projects');
    }
}
