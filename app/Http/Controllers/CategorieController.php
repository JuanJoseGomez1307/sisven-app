<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categorie.index', ['categories' => $categories]);;
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the input
        $request->validate([
            'name' => 'required|max:80',
            'description' => 'required'
        ]);

        // Create a new category
        $category = new Categorie();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        // Redirect to the categories list or show a success message
        return redirect()->route('categories.index')
                        ->with('success', 'Category created successfully.');
        //return view ('categories.index', ['category' => $category]);
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
