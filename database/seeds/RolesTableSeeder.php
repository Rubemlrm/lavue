<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Developer Role
        DB::table('roles')->insert([
            'name' => 'Developer',
            'slug' => 'developer',
        ]);

        //Admin Role
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'slug' => 'administrator',
        ]);

        //User Role
        DB::table('roles')->insert([
            'name' => 'User',
            'slug' => 'user',
        ]);
    }
}
