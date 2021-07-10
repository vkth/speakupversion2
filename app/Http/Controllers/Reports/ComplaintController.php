<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Complaint;

class ComplaintController extends Controller
{
    public function index() {
        $complaints=Complaint::all();
        return view('dashboard.reports.complaints.datatable', compact('complaints'));
    }

    public function ajax()
    {
        return view('complaints.ajax');
    }

    public function store(Request $request)
    {
       

    }

    public function update(Complaint $complaint){

        $validated_complaint = $this->validateComplaint(false);
       
        $complaint->update($validated_complaint);
        
        return redirect('/complaints')->with('success', 'Status Updated!');
    }

    protected function validateComplaint($create=true){

        return request()->validate([
            'status' => 'required',
            
            ]); // validate request
    }


    public function edit($id)
	{
		
	}

    public function destroy(Vehicle $vehicle){

    }
}

