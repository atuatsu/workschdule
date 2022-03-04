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
            'password' => bcrypt('masakimasaki'),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => '松本潤',
            'position' => 'ホール',
            'email' => 'au@au.com',
             'password' => bcrypt('jyunjyun')
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => '二宮和也',
            'position' => 'キッチン',
            'email' => 'softbank@.com',
            'password' => bcrypt('kazunarikazunari'),
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'name' => '花瀬敦',
            'position' => 'キッチン',
            'email' => 'atsushi2427@icloud.com',
            'password' => bcrypt('Atsutsu08'),
        ]);
    }
}
