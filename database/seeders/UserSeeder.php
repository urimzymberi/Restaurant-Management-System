<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            ['name' => 'User1', 'email' => 'user1@user', 'password' => '123456', 'photo' => '', 'personal_number' => '1234567897', 'Phone_number' => '123456789', 'active' => '1'],
            ['name' => 'User2', 'email' => 'user2@user', 'password' => '123456', 'photo' => '', 'personal_number' => '1234567897', 'Phone_number' => '123456789', 'active' => '1'],
            ['name' => 'User2', 'email' => 'user3@user', 'password' => '123456', 'photo' => '', 'personal_number' => '1234567897', 'Phone_number' => '123456789', 'active' => '1'],
        ];

        foreach ($list as $u)
        {
            $user = new User();
            $user->name = $u['name'];
            $user->email = $u['email'];
            $user->password = Hash::make($u['password']);
            $user->photo = 'photo';
            $user->personal_number = $u['personal_number'];
            $user->Phone_number = $u['Phone_number'];
            $user->active = $u['active'];
            $user->save();
        }
    }
}
