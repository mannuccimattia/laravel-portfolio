<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with("type", "technologies")->get();

        // dd($projects);

        return response()->json(
            [
                "success" => true,
                "data" => $projects
            ]
        );
    }

    public function show(Project $project)
    {
        $project->load("type", "technologies");

        return response()->json([
            "success" => true,
            "ddata" => $project
        ]);
    }
}
