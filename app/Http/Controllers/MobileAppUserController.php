<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobileappuser;

class MobileappuserController extends Controller
{
    public function index() {
        $mobileappusers=Mobileappuser::all();
        return view('dashboard.mobileappusers.datatable', compact('mobileappusers'));
    }

        
    
}
