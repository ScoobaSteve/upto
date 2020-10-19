<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //INDEX = render a list of a resource
    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    //SHOW = show a single resource
    public function show($id)
    {
        $task = Task::find();

        return view('tasks.show', ['task' => $task]);
    }

    //CREATE = show a view to create a new resource
    public function create($id)
    {
        $task = Task::find();

        return view('tasks.show', ['task' => $task]);
    }

    //STORE = persist the new resource
    public function store($id)
    {
        $task = Task::find();

        return view('tasks.show', ['task' => $task]);
    }

    //EDIT = show a view to edit an existing resource
    public function edit($id)
    {
        $task = Task::find();

        return view('tasks.show', ['task' => $task]);
    }

    //UPDATE = Persist the updated resource
    public function update($id)
    {
        $task = Task::find();

        return view('tasks.show', ['task' => $task]);
    }

    //DESTROY = delete the resource
    public function destroy($id)
    {
        $task = Task::find();

        return view('tasks.show', ['task' => $task]);
    }


}
