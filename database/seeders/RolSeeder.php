<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Crear Usuario
        $user = User::query()->create([
            'name' => 'Romulo',
            'email' => 'romulo@gmail.com',
            'password' => '12345678'
        ]);

        // Creando Rol de administrador
        $administrador = Role::create(['name' => 'Administrador']);

        // Asignando Rol de adiministrador a usuario
        $user->assignRole($administrador);

        //obteniendo todos los permisos
        $permisosAdmin = Permission::query()->pluck('name');

        // Asignando Permisoso a rol de administrado 
        $administrador->syncPermissions($permisosAdmin);

        $user = User::query()->create([
            'name' => 'José',
            'email' => 'jose@gmail.com',
            'password' => '987654321'
        ]);

        // Creando Rol de supervisor
        $supervisor = Role::create(['name' => 'Superviso']);

        // Asignando Rol de adiministrador a usuario
        $user->assignRole($supervisor);

        //obteniendo todos los permisos
        $permisosAdmin = Permission::query()->pluck('name');

        // Asignando Permisoso a rol de administrado 
        $supervisor->syncPermissions('crear');
    }
}
