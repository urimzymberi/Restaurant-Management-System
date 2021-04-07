<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'r_date'=>'required',
            'r_time'=>'required',
            'r_guest'=>'required',

        ]);
        $d = $request->input('r_date').' '.$request->input('r_time');
        $d = date('Y-m-d H:i:s',strtotime($d));
        $d1 = strtotime($d . '+90 minutes');

        $reservation_ = Reservation::where([
            ['date_time', '>=', $d],
            ['date_time', '<=', date('Y-m-d H:i:s',$d1)]
        ])->get();
        $table = Table::get();


        if ($reservation_->count() < $table->count()){
            $reservation = new Reservation();
            $reservation->phone_number = $request->input('r_phone_number');
            $reservation->guest_number = $request->input('r_guest');
            $reservation->date_time = $d;
            $reservation->comment = $request->input('r_comment');
            $reservation->user_id = Auth::user()->id;

            if($reservation->save())
            {
                echo '<strong class="alert-success">Është rezervuar me sukses!</strong>';
                Mail::to(auth()->user()->email);
            } else {
                echo 'nuk u rujt';
            }
        } else {
            echo '<strong class="alert-warning">Nuk ka tavolina te lira ne kete orar!</strong>';
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
