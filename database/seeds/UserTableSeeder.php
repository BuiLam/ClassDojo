<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', 'admin')->first();

        $user1 = User::create([
            'email' => 'admin@email.com',
            'password' => bcrypt('123456')
        ]);
        $user1->roles()->attach($admin->id);

        $user2 = User::create([
            'email' => 'teacher@email.com',
            'password' => bcrypt('123456')
        ]);

        $user3 = User::create([
            'email' => 'parent@email.com',
            'password' => bcrypt('123456')
        ]);
    }
}
