<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Blogs::all();
    }

 
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blogs = new Blogs();
        $blogs->title = $request->title;
        $blogs->description = $request->description;
        $blogs->author = $request->author;
        $blogs->save();
        return response()->json(['message' => 'Blog Added Successfully', 'status' => '200']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Blogs::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
