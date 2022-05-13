<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin, Usuario
       $admin = Role::create(['name' => 'admin']);
        $usuario = Role::create(['name' => 'usuario']);

        
        Permission::create(['name' => 'usuarios'])->syncRoles($admin);
        Permission::create(['name' => 'crearUs'])->syncRoles($admin);
        Permission::create(['name' => 'actualizarUs'])->syncRoles($admin);
        Permission::create(['name' => 'eleminarUs'])->syncRoles($admin);
       
    }
}
