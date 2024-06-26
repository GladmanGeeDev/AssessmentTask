<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all properties with images
        $properties = Property::select()->count();

        return view("admin.dashboard", compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $properties = Property::all();

        return view("admin.property.create-properties", compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $property = new Property($request->all());

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/images/'), $imageName);
            $property->image = $imageName; // Store just the filename
        }
        
        $property->save();

        return redirect('admin/display-properties/')->with('success', 'Property created successfully.');
    }

    public function displayProperties(){

        $properties = Property::all();

        return view("admin.property.display-properties", compact('properties'));

    }

    public function propertyData(){

        $properties = Property::all();

        return view("admin.property.property-datatable", compact('properties'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    

     public function edit(Property $property)
    {
        return view('admin.property.edit-properties', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'location' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $property->name = $validatedData['name'];
    $property->description = $validatedData['description'];
    $property->price = $validatedData['price'];
    $property->location = $validatedData['location'];

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('assets/images/'), $imageName);
        $property->image = $imageName;
    }

    $property->save();

    return redirect()->route('admin.display-properties')->with('success', 'Property updated successfully.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        if ($property) {
            $property->delete();
            return redirect()->route('admin.display-properties')->with('success', 'Property deleted successfully.');
        } else {
            return redirect()->route('admin.display-properties')->with('error', 'Property not found.');
        }
    }
}
