<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
            'id' => 1,
            'body' => 'こんにちは',
            'updated_at' => new DateTime(),
            'created_at' => new DateTime(),
            'user_id' => 1,
        ]);
    }
}
