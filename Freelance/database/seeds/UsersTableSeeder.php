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
            'id' => 2,
            'name' => 'Asher Davila',
            'email' => 'asher@outlook.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
