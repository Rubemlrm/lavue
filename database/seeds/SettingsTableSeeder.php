<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("settings")->insert([
            "site_name" => "Backend",
            "site_description" => "backend",
            "contact_email" => "devop@lavue.app"
        ]);
    }
}
