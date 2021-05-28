<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Vehicle;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $operators=(Operator::latest()->paginate(100) );
        return view('dashboard.operators.datatable', compact('operators'));
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
        $this ->validate($request,[
            'operator_id'   => 'required',
            'name'          => 'required',
            'address'       => 'required',
            'phone_number'  => 'required',
            

            ]);

        $operator = new Operator;
        
        $operator->operator_id     = $request->input('operator_id');
        $operator->name            = $request->input('name');
        $operator->address         = $request->input('address');
        $operator->phone_number    = $request->input('phone_number');
        
       
        $operator->save();
        
        return redirect('/operators')->with('success', 'Data Saved!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operator $operator){

        $vehicle->delete();

        return redirect('/operators')->with('success', 'Operator Successfully Deleted!');
    }
        

    
}
