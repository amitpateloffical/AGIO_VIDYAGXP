<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\PermissionRole;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->name = 'Super Admin';
        $role->save();

        $admin = new Admin;
        $admin->name = 'Super Admin';
        $admin->email = 'admin@vidyagxp.com';
        $admin->username = 'admin';
        $admin->password = bcrypt('password');
        $admin->status = 1;
        $admin->role_id = $role->id;
        $admin->save();

        for ($i = 1; $i <= 174; $i++)
        {
            $permissions = new PermissionRole;
            $permissions->timestamps = false;
            $permissions->role_id = $role->id;
            $permissions->permission_id = $i;
            $permissions->save();
        }
    }
}
