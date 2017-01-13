<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MatrixTask;
use Auth;

class MatrixTaskController extends Controller
{
    //Show the main matrix entries
    public function index() {
        $tasks = MatrixTask::where('user_id', Auth::user()->id)->get();
        
        print($tasks);
        //return view('matrix/matrix',['tasks' => $tasks]);
    }
    //TODO: create middleware
}
