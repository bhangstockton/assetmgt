<?php

use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kennedy Mariano IV',
            'email' => 'kennmar4@live.com',
            'password' => bcrypt('password'),
        ]);
    }
}
