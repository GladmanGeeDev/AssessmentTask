<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function index()
     {
         $titles = Title::all();
     
         return view('admin.titles.index', compact('titles'));
     }

     public function homeIndex()
            {
                    $titles = Title::paginate(10);

                return view('index', compact('titles'));
            }
     

    /**
     * Show the form for creating a new resource.
     */
    public function create(){

        $titles = Title::all();

        return view("admin.titles.create", compact('titles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Title::create([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('titles.index')->with('success', 'Title added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = Title::findOrFail($id);
        return view('admin.titles.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $title = Title::findOrFail($id);
        $title->title = $request->input('title');
        $title->save();

        return redirect()->route('admin.titles.index')->with('success', 'Title updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
