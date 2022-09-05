<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     /**
     * search for a specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //     return view('tasks.index', [
        //     'listings' => Task::latest()->filter(request(['tag', 'search']))->paginate(6)
        // ]);
    }
}

    // // Show all listings
    // public function index() {
    //     return view('listings.index', [
    //         'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
    //     ]);
    // }

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

