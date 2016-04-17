<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Employee::class, 'male', 25)->create();
        factory(App\Employee::class, 'female', 25)->create();
    }
}
