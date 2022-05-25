<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Database\Seeder\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'emai' => 'admin@gmail.com',
            'password' => bcrypt('121212'),
            'created_at' => '2020-12-12 12:45:14'
         ]);
    }
}
