<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Vehicle;

class OperatorController extends Controller
{
    
    public function index() {
        $operators=Operator::all();
        return view('dashboard.operators.datatable', compact('operators'));
    }

   
    public function ajax()
    {
        return view('operator.ajax');
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $this ->validate($request,[
            
            'name'          => 'required',
            'address'       => 'required',
            'phone_number'  => 'required',

            ]);

        $operator = new Operator;
        
        $operator->name            = $request->input('name');
        $operator->address         = $request->input('address');
        $operator->phone_number    = $request->input('phone_number');
        
       
        $operator->save();
        
        return redirect('/operators')->with('success', 'Success! Operator Added');
    }

   
    public function show($id)
    {
        //
    }


    public function update(Operator $operator){

        $validated_operator = $this->validateOperator(false);
       
        $operator->update($validated_operator);
        
        return redirect('/operators')->with('success', 'Operator Profile Updated!');
    }

    protected function validateOperator($create=true){

        return request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            
            ]); // validate request
    }

  
    public function destroy(Operator $operator){

        $operator->delete();

        return redirect('/operators')->with('warning', 'Operator Successfully Deleted!');
    }
        

    
}
