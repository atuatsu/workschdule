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
            'name' => '相葉雅紀',
            'position' => 'ホール',
            'email' => 'masaki@au.com',
            'password' => 'masakimasaki',
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => '松本潤',
            'position' => 'ホール',
            'email' => 'au@au.com',
             'password' => 'jyunjyun',
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => '二宮和也',
            'position' => 'キッチン',
            'email' => 'softbank@.com',
            'password' => 'kazunarikazunari',
        ]);
    }
}
