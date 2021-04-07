<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();

        $user_role_id = DB::table('model_has_roles')->where('model_id','=',$user->id)->get();


        if($user_role_id->count()==0){
            auth()->user()->assignRole('Client');
        }

        $user_role = $user->getRoleNames()[0];

        if ($user_role == 'Client'){
            return  redirect(route('reservation'));
        } elseif($user_role == 'Waiter') {
            return redirect()->route('tables');
        } elseif($user_role == 'Chief') {
            return redirect(asset('prepare'));
        } elseif($user_role == 'Admin') {
            return redirect(asset('user'));
        } else {
            return view('home');
        }
    }
}
