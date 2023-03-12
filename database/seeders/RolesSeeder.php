<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_migrant = Role::create(['name' => 'migrant']);

        // Manage Users Permissions
        $permission_read_users = Permission::create(['name' => 'read users']);
        $permission_edit_users = Permission::create(['name' => 'edit users']);
        $permission_write_users = Permission::create(['name' => 'write users']);
        $permission_delete_users = Permission::create(['name' => 'delete users']);

        $permissions_admin = [$permission_read_users, $permission_edit_users, $permission_write_users, $permission_delete_users];

        $role_admin->syncPermissions($permissions_admin);
        //$role_migrant->givePermissionTo($permission_read_users);

    }
}
