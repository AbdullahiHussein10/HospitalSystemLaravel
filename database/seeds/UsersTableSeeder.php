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
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'doctor',
            'email' => 'doctor@mail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'name' => 'nurse',
            'email' => 'nurse@mail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}