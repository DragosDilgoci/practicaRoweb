<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@practica.local')->exists()){
            $user = new User();
            $user->name='admin';
            $user->email = 'admin@practica.local';
            $user->password = Hash::make('parola');
            $user->save();
        }
    }
}
