<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();
        DB::table('assigned_roles')->truncate();

        $user = User::create([
            'name' => 'Perla Arroyos',
            'email' => 'perla@gmail.com',
            'password' => '12345678',
        ]);
        
        $role = Role::create([
            'key' => 'admin',
            'name' => 'Administrator',
            'description' => 'Web Site Administrator'
        ]);

        $user->roles()->save($role);
    }
}
