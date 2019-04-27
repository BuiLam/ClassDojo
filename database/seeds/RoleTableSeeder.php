<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viewHome = Permission::where('name', 'viewHome')->first();

        $admin = Role::create([
           'name' => 'admin'
        ]);
        $admin->permissions()->attach($viewHome->id);

        $teacher = Role::create([
            'name' => 'teacher'
        ]);

        $parent = Role::create([
            'name' => 'parent'
        ]);
    }
}
