<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //Index method
    public function index() {

        $results = Project::all();
        return response()->json([
            'success' => true,
            'results' => $results
        ]);
    }
}