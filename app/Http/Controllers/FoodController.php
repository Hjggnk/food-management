<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods= Food::all();
        return view('foods.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foods.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'img_url' => 'required',
            'production_date' => 'required',
            'shelf_life' => 'required',
            
        
         ]);

        Food::create($request->all());
        return redirect()->route('foods.index')->with('success', 'Food created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        return view('foods.show',compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        return view('foods.edit',compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'img_url' => 'required',
            'production_date' => 'required',
            'shelf_life' => 'required',
            
        
        ]);
        $food->update($request->all());
        return redirect()->route('foods.index')->with('success', 'Food created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->route('foods.index')->with('success', 'Food deleted successfully.');
    }
}
