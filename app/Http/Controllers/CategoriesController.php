<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoriesController extends Controller
{
   protected $categories;

    public function __construct()
    {
        $this->middleware('auth');
        $this->categories = new  Categorie();
    }
    public function index()
    {
        //
       $categorie = $this->categories::all();

        return view('categories.index', ['category' => $categorie]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $this->validate($request, [
            'name' => 'required|max:255',
            'status' => 'required',
        ]);

        $this->categories->name = $request->input('name');
        $this->categories->status =$request->input('status');
        $this->categories->save();
        return redirect('categories');


    }

    /**
     * Display the specified resource.
     */
    

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
