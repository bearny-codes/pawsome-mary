<?php

namespace Database\Seeders;

use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            // beginning_of_roles

            //end_of_roles
        ];

        $permissions = [
            // beginning_of_permissions

            // end_of_permissions
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }
    }
}
