<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTypeSeeder::class);
        $this->call(BatchSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(EducationTypeSeeder::class);
    }
}
