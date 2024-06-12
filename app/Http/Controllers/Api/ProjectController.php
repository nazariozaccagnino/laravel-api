<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        if($projects){
            return response()->json([
                'success'=> true,
                'results'=> $projects
            ]);
        }
        else{
            return response()->json([
                'success'=> false,
                'results'=> 'Project not found'
            ], 200);
        }
    }
    public function show($slug)
    {
        $project = Project::where('slug', $slug);
        if ($project) {
            return response()->json([
                'status' => 'success',
                'message' => 'Ok',
                'results' => $project
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Error'

            ], 404);
        }

    }
}
