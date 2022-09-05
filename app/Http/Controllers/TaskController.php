<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return view('home', 
        [
            'tasks' => Task::latest()
                                    ->filter(request(['urgency_level', 'search']))
                                    ->paginate(6)
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function manage()
    {
        //
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

