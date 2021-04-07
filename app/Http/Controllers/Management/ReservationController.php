<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
            $reservations = Reservation::orderBy('created_at', 'desc')->get();
            $tables = Table::all();
            return view('management.admin.reservation', compact('reservations','tables'));
    }
    public function update(Request $request,Reservation $reservation){
        $reservation->table_id = $request->input('table_id');
        $reservation->update();
        return redirect()->back();
    }
}
