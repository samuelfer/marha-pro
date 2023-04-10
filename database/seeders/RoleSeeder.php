<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admins',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $adminRole = Role::where('name', 'Admins')->first();

        $permissions = Permission::all();


        foreach ($permissions as $permission) {
            DB::insert('insert into role_has_permissions (permission_id, role_id) values (?, ?)', [$permission->id, $adminRole->id]);
        }
    }
}
