<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
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

    public function create()
    {
        return view('admin.titles.create-title');
    }

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

    public function edit($id)
    {
        $title = Title::findOrFail($id);
        return view('admin.titles.edit-title', compact('title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $title = Title::findOrFail($id);
        $title->title = $request->input('title');
        $title->save();

        return redirect()->route('titles.index')->with('success', 'Title updated successfully!');
    }

    public function destroy($id)
    {
        $title = Title::findOrFail($id);
        $title->delete();

        return redirect()->route('titles.index')->with('success', 'Title deleted successfully!');
    }
}