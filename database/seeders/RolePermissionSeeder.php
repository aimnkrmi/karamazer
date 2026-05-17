<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'view dashboard',

            'view participants',
            'create participants',
            'update participants',
            'delete participants',

            'view courses',
            'create courses',
            'update courses',
            'delete courses',

            'view registrations',
            'create registrations',
            'update registrations',
            'delete registrations',

            'manage users',
            'manage roles',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }

        // create roles
        $roles = [
            'super-admin',
            'admin',
            'staff',
            'participant'
        ];

        foreach ($roles as $role) {
            Role::findOrCreate($role);
        }

        // assign permission to roles
        $adminPermissions = [
            'view dashboard',

            'view participants',
            'create participants',
            'update participants',
            'delete participants',

            'view courses',
            'create courses',
            'update courses',
            'delete courses',

            'view registrations',
            'create registrations',
            'update registrations',
            'delete registrations',

            'manage users',
            'manage roles',
        ];

        $staffPermissions = [
            'view dashboard',

            'view participants',
            'create participants',
            'update participants',

            'view courses',

            'view registrations',
            'create registrations',
            'update registrations',
        ];

        $participantPermissions = [
            'view dashboard',
            'view courses',
            'create registrations',
            'view registrations',
        ];

        Role::findByName('admin')->syncPermissions($adminPermissions);
        Role::findByName('staff')->syncPermissions($staffPermissions);
        Role::findByName('participant')->syncPermissions($participantPermissions);

        $user = User::firstOrCreate([
            'email' => 'aimankarami27@gmail.com',
            'name' => 'Aiman Karami',
            'password' => bcrypt('password')
        ]);

        $user->assignRole('super-admin');
    }
}