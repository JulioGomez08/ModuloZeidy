<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesHasPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_aux_jse = Role::create(['name' => 'auxJSE']);
        $rol_jse = Role::create(['name' => 'JSE']);

        Permission::create(['name' => 'reportes.index'])->syncRoles([$rol_aux_jse]);
        Permission::create(['name' => 'graficas.index'])->syncRoles([$rol_jse]);


        $user = User::create([
            'name' => 'zeydy',
            'email' => 'viki1@gmail.com',
            'password' => '$2y$10$V.RHkKT2kx.ne43sKzFYx.G0GDDJavOX4kSxwDMToGO3bJO9unJ7C',
            'status' => '1',
            'role' => '0',
        ])->assignRole('JSE');
    }
}
