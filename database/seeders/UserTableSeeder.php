<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('9960011A'),
        ]);
        $user->assignRole('admin');


        $user = User::create([
            'name' => 'Client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('9960011A'),
        ]);

        $user->assignRole('client'); 
    }
}
