<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MatrixTask;

class MatrixTaskController extends Controller
{
    //Show the main matrix entries
    public function index() {
        MatrixTask
        
        
        return view('matrix/matrix',['variablename' => $variable]);
    }
    
}
