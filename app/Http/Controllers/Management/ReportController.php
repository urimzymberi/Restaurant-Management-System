<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\State;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $reports = State::latest()->get();
        return view('management.admin.report',compact('reports'));
    }
}
