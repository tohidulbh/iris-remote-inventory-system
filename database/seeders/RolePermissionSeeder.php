<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'Super Admin',
            'IT Admin',
            'Manager',
            'Auditor',
            'Employee',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }

        $user = User::firstOrCreate(
            ['email' => 'admin@iris.local'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('Admin@12345'),
            ]
        );

        $user->assignRole('Super Admin');
    }
}