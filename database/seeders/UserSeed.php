<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'nombre'=> 'admin',
            'apellido' => 'admin',
            'cuidad' => 'San miguel',
            'estado'=> 'sdsdsds',
            'email' => 'alexcrz2000.md@gmail.com',
            'email_verified_at' => now(),
            'numero' => '00000000',
            'password' => '$2a$12$qB7sdI4zuqL1nwuym3vA4eNEzNqkY3/6L9PyeLJ1chpZ4N5jhUcOK' //Alejandro
        ])->assignRole('admin'); 

        User::create([
            'nombre'=> 'Prueba',
            'apellido' => 'secuandarias',
            'cuidad' => 'San miguel',
            'estado'=> 'sdsdsds',
            'email' => 'pruebasecuandaria44@gmail.com',
            'email_verified_at' => now(),
            'numero' => '00000000',
            'password' => '$2a$12$qB7sdI4zuqL1nwuym3vA4eNEzNqkY3/6L9PyeLJ1chpZ4N5jhUcOK' //Alejandro
        ])->assignRole('usuario'); 
        
    }
}
