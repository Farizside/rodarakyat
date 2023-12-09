<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    Public function index(){
        $cars = Cars::all();
        return view('admin.cars', compact(['cars']));
    }

    Public function create(){
        return view('admin.carsCreate');
    }

    Public function store(Request $request){
        $request->validate([
            'license_plate' => 'required|max:9|unique:cars',
            'car_type' => 'required',
            'price' => 'required|integer',
            'capacity' => 'required|integer|max:20',

        ]);
        Cars::create([
            'license_plate' => $request->license_plate,
            'car_type' => $request->car_type,
            'price' => $request->price,
            'capacity' => $request->capacity,
        ]);

        return redirect('/admin/cars')->with('success', 'Success added new car');
    }

    Public function edit($id){
        $cars = Cars::find($id);
        return view('admin.carsEdit', compact(['cars']));
    }

    Public function update(Request $request, $id){
        $request->validate([
            'license_plate' => 'required|max:9|unique:cars',
            'car_type' => 'required',
            'price' => 'required|integer',
            'capacity' => 'required|integer|max:20',

        ]);
        $cars = Cars::find($id);
        $cars->update([
            'license_plate' => $request->license_plate,
            'car_type' => $request->car_type,
            'price' => $request->price,
            'capacity' => $request->capacity,
        ]);

        return redirect('/admin/cars')->with('success', 'Success updated car');
    }

    Public function destroy($id){
        $cars = Cars::find($id);
        $cars->delete();

        return redirect('/admin/cars')->with('success', 'Success deleted car');
    }

}
