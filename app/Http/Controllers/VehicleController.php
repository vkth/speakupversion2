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
        return view ('dashboard.vehicles.datatable', compact('vehicles'));
    }

    public function show(){
        $vehicles = Vehicle::all();
        return view ('dashboard.vehicles.datatable', compact('vehicles'));
    }
    

    public function ajax()
    {
        return view('vehicles.ajax');
    }

    public function store(Request $request)
    {
        

        $validated_vehicle     = $this->validateVehicle();
        $validated_operator_name    = $this->validateOperatorName();
                             
        // find the specific operator with the given id
        $operator = Operator::find($validated_vehicle['operator_id']);
        $validated_vehicle['admin_id'] = Auth::user()->id;
        $vehicles = $operator->vehicles()->create($validated_vehicle);
        
        //$vehicles = Operator::where('name', 'like', '%' . $validated_operator_name .'%' )->get()->first();
       
        //$vehicle->save();

        return redirect('/vehicles')->with('success', 'Vehicle Added!');
    }

    public function update(Vehicle $vehicle){

        $validated_vehicle = $this->validateVehicle(false);
        //$validated_operator_name = $this->validateOperatorName(false);

        $vehicle->update($validated_vehicle);
        //$vehicle->update($validated_operator_name);
        
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

    protected function validateOperatorName($create=true){

        return request()->validate([
            'operator_name' => 'required',
            
            ]); // validate request
    }

    public function edit($id)
	{
		
	}

    public function destroy(Vehicle $vehicle){

        $vehicle->delete();

        return redirect('/vehicles')->with('success', 'Vehicle Successfully Deleted!');
    }
}
