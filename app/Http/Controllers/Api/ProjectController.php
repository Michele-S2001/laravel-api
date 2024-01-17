<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //Index method
    public function index() {

        $results = Project::with('type')->orderBy('id', 'DESC')->paginate(12);
        return response()->json([
            'success' => true,
            'results' => $results
        ]);
    }

    //Show method
    public function show(Project $project) {

        $project->load('type', 'technologies');

        return response()->json([
            'success' => true,
            'project' => $project
        ]);
    }
}
