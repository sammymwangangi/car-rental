<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Whoops! An error occured during sign in, fill all required fields!');
        }
        try {
            Category::create(array_merge($request->all()));
            return redirect()->back()->with('success', 'Category has been created');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Whoops!, Something went wrong during submission, Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Category::findOrFail($id)->update(array_merge($request->except(['id'])));
        return redirect()->back()->with('info','Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $delete = Category::find($id);
            $delete->delete();
            return redirect()->back()->with('info', 'Category has been deleted!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Whoops!, Something went wrong during deletion, Please try again.');
        }
    }
}
