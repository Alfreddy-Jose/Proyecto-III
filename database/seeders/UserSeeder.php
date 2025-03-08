<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creando un usuario de prueba para el desarrollo 
        $user = new User;
        
        $user->name = 'Alfreddy';
        $user->email = 'alfreddy@gmail.com';
        $user->password = bcrypt('alfreddy');

        $user->save();
    }
}
