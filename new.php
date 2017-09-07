<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function list()
  {
    $tasks=\App\Task::all();
    return view('list')->with ('jobs',$tasks);
  }
  public function add()
  {
      return view('add');
  }
  public function save(Request $req)
  {
      $task=new \App\Task;
      $task->name=$req->name;
      $task->save();
     return \Redirect::to('/tasks');
  }

}
