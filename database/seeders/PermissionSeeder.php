<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permisos para gestionar registros
        Permission::create(['name' => 'ver']);
        Permission::create(['name' => 'crear']);
        Permission::create(['name' => 'editar']);
        Permission::create(['name' => 'eliminar']);
    }
}
