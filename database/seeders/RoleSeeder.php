<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = Permission::all();

        Role::create([
            'name' => 'Super admin',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now(),
        ])->syncPermissions([
            $permissions
        ]);
    }
}
