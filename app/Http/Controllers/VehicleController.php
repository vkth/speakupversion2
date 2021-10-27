<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Operator;
use App\Complaint;
use App\Review;
use Auth;

class VehicleController extends Controller
{
   
    public function index() {
        $vehicles=Vehicle::all();
        return view('dashboard.vehicles.datatable', compact('vehicles'));
    }

    public function ajax()
    {
        return view('vehicle.ajax');
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $this ->validate($request,[
            
            'body_plate'          => 'required',
            'vehicle'       => 'required',
            'status'  => 'required',

            ]);

        $vehicle = new Vehicle;
        
        $vehicle->body_plate            = $request->input('body_plate');
        $vehicle->vehicle         = $request->input('vehicle');
        $vehicle->status    = $request->input('status');
        
       
        $vehicle->save();
        
        return redirect('/vehicles')->with('success', 'Success! Vehicle Added');
    }

   
    public function show($id)
    {
        //
    }


    public function update(Vehicle $vehicle){

        $validated_vehicle = $this->validateVehicle(false);
       
        $vehicle->update($validated_vehicle);
        
        return redirect('/vehicles')->with('success', 'Vehicle Profile Updated!');
    }

    protected function validateVehicle($create=true){

        return request()->validate([
            
            'body_plate'          => 'required',
            'vehicle'       => 'required',
            'status'  => 'required',
            
            ]); // validate request
    }

  
    public function destroy(Vehicle $vehicles){

        $vehicle->delete();

        return redirect('/vehicles')->with('warning', 'Vehicle Successfully Deleted!');
    }
        
}
