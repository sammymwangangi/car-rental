<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Exports\ExportCars;
use App\Imports\ImportCars;
use Maatwebsite\Excel\Facades\Excel;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }
    public function getCars()
    {
        $cars = Car::paginate(3);
        return view('welcome', compact('cars'));
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
            'description' => 'required',
            'price' => 'required',
            'nop' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Whoops! An error occured during sign in, fill all required fields!');
        }
        try {
            $car = Car::create(array_merge($request->all()));
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $request->image->move('images', $fileName);
                $car->update(['image' => $fileName]);
            }
            return redirect()->back()->with('success', 'Car has been created');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Whoops!, Something went wrong during submission, Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Car::findOrFail($id)->update(array_merge($request->except(['id'])));
        return redirect()->back()->with('info','Car has been updated!');
        try {
            $car = Car::find($id);
            $car->update(array_merge($request->all()));
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $request->image->move('images', $fileName);
                $car->update(['image' => $fileName]);
            }
            return redirect()->back()->with('info','Car has been updated!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occured during updating the car!');
        }
    }

    public function updateLikes(Request $request, Car $car)
    {
        $car->likes = $request->likes;
        $car->save();

        return response()->json('Success', 200);
        // Car::findOrFail($id)->update(array_merge($request->except(['id'])));
        // return redirect()->back()->with('info','Car has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $delete = Car::find($id);
            $delete->delete();
            return redirect()->back()->with('info', 'Car has been deleted!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Whoops!, Something went wrong during deletion, Please try again.');
        }
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ExportCars, 'cars.xlsx');
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ImportCars, request()->file('file'));
            
        return back();
    }
}
