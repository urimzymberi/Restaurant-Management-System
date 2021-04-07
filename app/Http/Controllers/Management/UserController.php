<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::paginate(15);
        return view('management.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //try {
            $this->validate($request, [
                'name' => 'required|min:2|string',
                'email' => 'email|required',
                'phone_number' => 'string|required',
                'password' => ['required', 'confirmed'],
                'personal_number' => 'string|nullable',
            ]);
            DB::beginTransaction();
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone_number = $request->input('phone_number');
        if ($request->hasFile('image')) {
            #$file= $request->image->getClientOriginalName();
            $fileName = Str::uuid();
            $user->photo = $request->image->storeAs('users', $fileName, 'public');
        }
            $user->active = $request->input('active');
            $user->personal_number = $request->input('personal_number');
            $user->password = Hash::make($request->input('password'));
            $user->save();

            if ($request->input('role') == 1) {
                $user->assignRole('Admin');
            } elseif ($request->input('role') == 2) {
                $user->assignRole('Waiter');
            } elseif($request->input('role') == 3) {
                $user->assignRole('Chief');
            }
            else{
                $user->assignRole('Client');
            }
            DB::commit();
            return redirect()->route('user.show', compact('user'));
//        }
//        catch (\Exception $exception) {
//            Log::error($exception->getMessage());
//        DB::rollBack();
//        return redirect()->back()->withInput($request->all());
//    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('management.admin.users.show', compact('user'));
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
    public function update(Request $request, User $user)
    {
        DB::beginTransaction();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        if ($request->hasFile('image')) {
            #$file= $request->image->getClientOriginalName();
            $fileName = Str::uuid();
            $user->photo = $request->image->storeAs('users', $fileName, 'public');
        }
        $user->active = $request->input('active');
        $user->password = Hash::make($request->input('password'));
        $user->update();

        if ($request->input('role') == 1) {
            $user->assignRole('Admin');
        } elseif ($request->input('role') == 2) {
            $user->assignRole('Waiter');
        } elseif($request->input('role') == 3) {
            $user->assignRole('Chief');
        }
        else{
            $user->assignRole('User');
        }
        DB::commit();
        return redirect()->route('user.show', compact('user'));
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
