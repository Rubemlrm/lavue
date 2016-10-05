<?php

use Illuminate\Database\Seeder;

class UserTableRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_name' => 'Backend',
        ]);
    }
}
