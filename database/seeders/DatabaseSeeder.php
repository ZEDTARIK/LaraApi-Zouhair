<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Student;
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
        // \App\Models\User::factory(10)->create();
        Student::factory(10)->create();
        Employee::factory(20)->create();
    }
}
