<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayPermissions = [
            [
                'name' => 'access_admins'
            ],
            [
                'name' => 'access_managers'
            ],
            [
                'name' => 'user_reads'
            ],
            [
                'name' => 'user_creates'
            ],
            [
                'name' => 'user_edits'
            ],
            [
                'name' => 'user_deletes'
            ],
            [
                'name' => 'role_reads'
            ],
            [
                'name' => 'role_creates'
            ],
            [
                'name' => 'role_edits'
            ],
            [
                'name' => 'role_deletes'
            ],
            [
                'name' => 'permission_lists'
            ],
            [
                'name' => 'permission_creates'
            ],
            [
                'name' => 'permission_edits'
            ],
            [
                'name' => 'permission_deletes'
            ]
        ];

        foreach ($arrayPermissions as $permission) {
            Permission::create([
                'name' => $permission['name'],
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
