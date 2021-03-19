<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobileappuser;

class MobileappuserController extends Controller
{
    public function index() {
        $mobileappusers=(Mobileappuser::latest()->paginate(10) );
        return view('mobileappuser.datatable', compact('mobileappusers'));
    }
}
