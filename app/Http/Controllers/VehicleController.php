<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::all();
        return view ('vehicles.datatable', compact('vehicles'));
    }

    /**public function datatable()
    //{
        $puvs = Vehicle::all();
        return view('vehicles.datatable', compact('vehicles'));
    }**/

    public function ajax()
    {
        return view('vehicles.ajax');
    }

    public function store(Request $request)
    {
        $this ->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'body_plate' => 'required',
            'vehicle' => 'required',
            'operator_id' => 'required',

            ]);

        $vehicles = new Vehicle;

        $vehicles->name = $request->input('name');
        $vehicles->address = $request->input('address');
        $vehicles->phone_number = $request->input('phone_number');
        $vehicles->body_plate = $request->input('body_plate');
        $vehicles->vehicle = $request->input('vehicle');
        $vehicles->operator_id = $request->input('operator_id');
        
        $vehicles->save();

        return redirect('/vehicles')->with('success', 'Data Saved!!!');
    }

}
