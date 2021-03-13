<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commendation;

class CommendController extends Controller
{
    public function index() {
        $commendations=(Commendation::latest()->paginate(10) );
        return view('reports.commends.datatable', compact('commendations'));
    }


}
