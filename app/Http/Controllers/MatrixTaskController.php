<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MatrixTask;
use Auth;

class MatrixTaskController extends Controller
{
    /**Add authentication middleware to the controller **/
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Show the main matrix entries
    public function index() {
        //$tasks = MatrixTask::where('user_id', Auth::user()->id)->get();
        $tasks = Auth::user()->matrixtasks;
        $name = Auth::user()->name;
        /**TODO review this
        print_r(["item1","item2"]);
        echo("<br>");
        print_r(["key1"=>"item1","item2"]);
        echo("<br>");
        print_r(['name' => $name, 'key2' => "asduioashd"]);
        echo("<br>");
        print_r(['tasks' => $tasks,'name' => $name]);
        **/
        return view('matrix/matrix',['tasks' => $tasks,'name' => $name]); 
    }
    //TODO adds tasks to table
    //TODO removes tasks to table
    //TODO display all tasks with correct placement
    //TODO update tasks
    //TODO change quadrant
}

