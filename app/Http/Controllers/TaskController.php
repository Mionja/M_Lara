<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //List of all tasks
    public function index()
    {
        $tasks = Task::all();
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


        // $formFields['user_id'] = auth()->id();

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
        //
    }

    //View which shows all possible actions on tasks
    public function manage()
    {
        //
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

    // //Show single listing
    // public function show(Listing $listing) {
    //     return view('listings.show', [
    //         'listing' => $listing
    //     ]);
    // }

    // // Show Create Form
    // public function create() {
    //     return view('listings.create');
    // }

    // // Store Listing Data
    // public function store(Request $request) {
    //     $formFields = $request->validate([
    //         'title' => 'required',
    //         'company' => ['required', Rule::unique('listings', 'company')],
    //         'location' => 'required',
    //         'website' => 'required',
    //         'email' => ['required', 'email'],
    //         'tags' => 'required',
    //         'description' => 'required'
    //     ]);

    //     if($request->hasFile('logo')) {
    //         $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    //     }

    //     $formFields['user_id'] = auth()->id();

    //     Listing::create($formFields);

    //     return redirect('/')->with('message', 'Listing created successfully!');
    // }

    // // Show Edit Form
    // public function edit(Listing $listing) {
    //     return view('listings.edit', ['listing' => $listing]);
    // }

    // // Update Listing Data
    // public function update(Request $request, Listing $listing) {
    //     // Make sure logged in user is owner
    //     if($listing->user_id != auth()->id()) {
    //         abort(403, 'Unauthorized Action');
    //     }
        
    //     $formFields = $request->validate([
    //         'title' => 'required',
    //         'company' => ['required'],
    //         'location' => 'required',
    //         'website' => 'required',
    //         'email' => ['required', 'email'],
    //         'tags' => 'required',
    //         'description' => 'required'
    //     ]);

    //     if($request->hasFile('logo')) {
    //         $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    //     }

    //     $listing->update($formFields);

    //     return back()->with('message', 'Listing updated successfully!');
    // }

    // // Delete Listing
    // public function destroy(Listing $listing) {
    //     // Make sure logged in user is owner
    //     if($listing->user_id != auth()->id()) {
    //         abort(403, 'Unauthorized Action');
    //     }
        
    //     $listing->delete();
    //     return redirect('/')->with('message', 'Listing deleted successfully');
    // }

    // // Manage Listings
    // public function manage() {
    //     return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    // }

