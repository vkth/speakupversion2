<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Operator;
use Auth;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::all();
        return view ('vehicles.datatable', compact('vehicles'));
    }


    public function ajax()
    {
        return view('vehicles.ajax');
    }

    public function store(Request $request)
    {
        
        $validated_vehicle = $this->validateVehicle();

        // find the specific operator with the given id
        $operator = Operator::find($validated_vehicle['operator_id']);
        
        $validated_vehicle['admin_id'] = Auth::user()->id;
        // create vehicles using the operator
        $vehicle = $operator->vehicles()->create($validated_vehicle);

        return redirect('/vehicles')->with('success', 'Vehicle Added!');
    }

    public function update(Vehicle $vehicle){

        $validated_vehicle = $this->validateVehicle(false);
        
        $vehicle->update($validated_vehicle);
        
        return redirect('/vehicles')->with('success', 'Vehicle Updated!');
    }

    protected function validateVehicle($create=true){

        return request()->validate([
            'body_plate' => 'required',
            'vehicle' => 'required',
            'status' => 'required',
            'operator_id' => $create? 'required|numeric':'',
            
            ]); // validate request
    }

    public function destroy(Vehicle $vehicle){

        $vehicle->delete();

        return redirect('/vehicles')->with('success', 'Vehicle Successfully Deleted!');
    }
}
