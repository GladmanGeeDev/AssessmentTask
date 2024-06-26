<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Title;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */


        public function index()
            {
                $properties = Property::orderBy('id', 'desc')->take(10)->get();
                return view('index',compact('properties'));
            }
        
        



    /**
     * Show the form for creating a new resource.
     */
    public function homeIndex()
    {
            $titles = Title::paginate(10);

        return view('index', compact('titles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
