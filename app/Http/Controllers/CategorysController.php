<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =  Category::all();

        

        return  view('backend.categories.index', compact('categories'));
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {

        try {

            $data = $request->all();

            Category::create($data);

            return redirect()->route('categories.index')->withMessage('Categories Added Successfully.');
        } catch (\Throwable $e) {
           return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
     
        try {

            $data = $request->except("_token");

            Category::where('id', $id)->update($data);

            return redirect()->route('categories.index')->withMessage('Categories Updated Successfully.');
        } catch (\Throwable $e) {
           return redirect()->back()->withError($e->getMessage());
        }
    }

// soft delete
    public function delete(Request $request, $id)
    {
     
        try {

            $data = $request->except("_token");

            Category::where('id', $id)->delete($data);

            return redirect()->route('categories.index')->withMessage('Categories Deleted!');
        } catch (\Throwable $e) {
           return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
