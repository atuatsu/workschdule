<?php

use Illuminate\Database\Seeder;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifts')->insert([
            'id' => 1,
            'date' => '2022-2-4',
            'start' => '12:12',
            'end' => '23:23',
            'comment' => 'お願いします',
            'user_id' => 1,
        ]);
    }
}
