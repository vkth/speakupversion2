<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commendation;

class CommendController extends Controller
{
    public function index() {
        $commendations=Commendation::all();
        return view('dashboard.reports.commends.datatable', compact('commendations'));
    }


}
