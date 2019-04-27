<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viewHome = Permission::create([
            'name' => 'viewHome',
            'description' => 'co the xem Home'
        ]);
    }
}
