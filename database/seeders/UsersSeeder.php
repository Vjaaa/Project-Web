<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(
            [
                [
                    'nama' => 'Operator ISPU',
                    'role' => 'Admin',
                    'username' => 'admin',
                    'password' => Hash::make('admin'),
                ]
            ]
        )->each(function ($user) {
            User::create($user);
        });
    }
}
