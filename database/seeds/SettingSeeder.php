<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
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
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
