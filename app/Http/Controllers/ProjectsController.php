<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $data = json_decode(file_get_contents(storage_path('app/public/projects.json')), true);
        
        return view('projects', compact('data'));
    }
}
