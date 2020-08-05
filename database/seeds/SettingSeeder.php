<?php

use Illuminate\Database\Seeder;#
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'maxBooking'=>2,
            'maxService'=>3,
            'user_id'=>1
        ]);
    }
}
