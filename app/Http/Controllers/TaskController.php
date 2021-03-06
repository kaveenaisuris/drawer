<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
 public function Store(Request $request){
    $task=new Task;
    $this->validate($request,[
        'task'=>'required|max:100|min:5'
    ]);
    $task->task=$request->task;
    $task->save();
    $data=Task::all();
   // dd($data);
    return view('tasks')->with('tasks',$data);

 }
}
