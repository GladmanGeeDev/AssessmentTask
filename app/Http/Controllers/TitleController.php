<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    public function index()
    {
      
        $titles = Title::all();

        return view("admin.title.title-datatable", compact('titles'));
    }

  

    public function create()
    {
        $titles = Title::all();

        return view("admin.title.create-titles", compact('titles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Title::create([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('title.data')->with('success', 'Title added successfully!');
    }


    public function edit(Title $title)
    {
        return view('admin.title.edit-titles', compact('title'));
    }

   

    public function update(Request $request, Title $title)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
    ]);

    $title->title = $validatedData['title'];

    $title->save();

    return redirect()->route('title.data')->with('success', 'Title updated successfully.');
}

    public function destroy($id)
    {
        $title = Title::findOrFail($id);
        $title->delete();

        return redirect()->route('title.data')->with('success', 'Title deleted successfully!');
    }
}