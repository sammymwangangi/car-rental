<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
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
            Brand::create(array_merge($request->all()));
            return redirect()->back()->with('success', 'Brand has been created');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Whoops!, Something went wrong during submission, Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Brand::findOrFail($id)->update(array_merge($request->except(['id'])));
        return redirect()->back()->with('info','Brand has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $delete = Brand::find($id);
            $delete->delete();
            return redirect()->back()->with('info', 'Brand has been deleted!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Whoops!, Something went wrong during deletion, Please try again.');
        }
    }
}
