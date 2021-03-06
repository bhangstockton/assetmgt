<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(DefaultUserSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(OfficeSeeder::class);
        $this->call(BrandSeeder::class);
    }
}
