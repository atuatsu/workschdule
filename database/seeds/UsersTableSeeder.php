<?php

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
        DB::table('users')->insert([
            'id' => 1,
            'name' => '花瀬敦',
            'position' => 'ホール',
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => '松本潤',
            'position' => 'ホール',
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => '二宮和也',
            'position' => 'キッチン',
        ]);
    }
}
