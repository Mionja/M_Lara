<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //List of all tasks
    public function index()
    {
        $tasks = Task::with('User')->where('user_id', auth()->user()->id)->get();
        // $tasks = Task::all();
        return view('home', compact('tasks'));
    }

    //Add task form
    public function create()
    {
        return view('tasks.add');
    }

    //Storing new task
    public function store(Request $request)
    {
        $formFields = $request->validate([
                    'title' => 'required',
                    'user_id' => 'required',
                    'description' => 'required'
                ]);
        
        if($request->limit) {
            $formFields['limit'] = $request->limit;
        }

        if($request->urgency_level) 
        {
            $formFields['urgency_level'] = $request->urgency_level;
        }
        else {
            $formFields['urgency_level'] = 'Not';
        }

        // dd($formFields);

        Task::create($formFields);

        return redirect()->route('task.index')->with('success', 'Task created successfully!');
    }

    //Show a specified task
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.detail', compact('task'));
    }

    //Editing a specified task
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    //Updating a specified task
    public function update(Request $request, $id)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if($request->limit) {
            $formFields['limit'] = $request->limit;
        }

        if($request->urgency_level) 
        {
            $formFields['urgency_level'] = $request->urgency_level;
        }
        else 
        {
            $formFields['urgency_level'] = 'Not';
        }

        $task = Task::find($id);
        $task-> update($formFields);

        return redirect()->route('task.index')->with('warning', 'Task edited successfully!');

    }

    //Delete a specified task
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('manage')->with('error', 'A task was deleted');
    }

    //View which shows all possible actions on tasks
    public function manage()
    {
        $tasks = Task::with('User')->where('user_id', auth()->user()->id)->get();
        return view('tasks.manage', compact('tasks'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $tasks = Task::query()
                            ->where('title', 'like', "%{$search}%") 
                            // ->orWhere('description', 'like', "%{$search}%")
                            ->orderBy('created_at', 'desc')
                            ->get();
        // dd($tasks);

        return view('home', [
            'tasks' => $tasks
        ]);
    }

}
