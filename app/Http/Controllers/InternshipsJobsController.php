<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternshipsJobsController extends Controller
{
    public function index(){
        return view('internships-jobs');
    }
}
