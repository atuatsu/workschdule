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
            'date' => '2022-2-3',
            'start' => '12:12',
            'end' => '23:23',
            'comment' => 'お願いします',
            'user_id' => 1,
        ]);
        DB::table('shifts')->insert([
            'id' => 2,
            'date' => '2022-2-4',
            'start' => '12:12',
            'end' => '23:23',
            'comment' => 'お願いします',
            'user_id' => 1,
        ]);
        DB::table('shifts')->insert([
            'id' => 3,
            'date' => '2022-2-5',
            'start' => '12:12',
            'end' => '23:23',
            'comment' => 'お願いします',
            'user_id' => 1,
        ]);
        DB::table('shifts')->insert([
            'id' => 4,
            'date' => '2022-2-6',
            'start' => '12:12',
            'end' => '23:23',
            'comment' => 'お願いします',
            'user_id' => 1,
        ]);
        DB::table('shifts')->insert([
            'id' => 5,
            'date' => '2022-2-7',
            'start' => '12:12',
            'end' => '23:23',
            'comment' => 'お願いします',
            'user_id' => 1,
        ]);
        DB::table('shifts')->insert([
            'id' => 6,
            'date' => '2022-2-8',
            'start' => '12:12',
            'end' => '23:23',
            'comment' => 'お願いします',
            'user_id' => 1,
        ]);
        DB::table('shifts')->insert([
            'id' => 7,
            'date' => '2022-2-9',
            'start' => '12:12',
            'end' => '23:23',
            'comment' => 'お願いします',
            'user_id' => 1,
        ]);
    }
}
