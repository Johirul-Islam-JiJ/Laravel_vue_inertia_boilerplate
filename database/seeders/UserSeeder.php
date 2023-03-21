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
        $user = new User();
        $user->name = "Mr. User";
        $user->email = "user@email.com";
        $user->password = Hash::make('123456789');
        $user->phone = '01234567893';
        if ($user->save())
            $user->assignRole('user');

        $user = new User();
        $user->name = "Mr. Admin";
        $user->email = "admin@email.com";
        $user->password = Hash::make('123456789');
        $user->phone = '01234567891';
        if ($user->save())
            $user->assignRole('admin');

        $user = new User();
        $user->name = "Super Admin";
        $user->email = "super@admin.com";
        $user->phone = '01234567890';
        $user->password = Hash::make('123456789');
        if ($user->save())
            $user->assignRole('super-admin');
    }
}
