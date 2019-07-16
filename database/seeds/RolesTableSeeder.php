<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('roles')->insert([
                'id' => '1',
                'name' => 'ROLE_ADMIN',
                'description' => 'admin priviledge',
                
            ]);
            DB::table('roles')->insert([
                'id' => '2',
                'name' => 'ROLE_DOC',
                'description' => 'Doc priviledge',
                
            ]);

            DB::table('roles')->insert([
                'id' => '3',
                'name' => 'ROLE_NURSE',
                'description' => 'Nurse Priviledge'
            ]);

            DB::table('roles')->insert([
                'id' => '4',
                'name' => 'ROLE_PHARMACIST',
                'description' => 'Pharmacist Priviledge'
            ]);
    }
}
}
