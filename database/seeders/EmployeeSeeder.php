<?php

namespace Database\Seeders;

use App\Models\Employee;
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
        Employee::factory()->count(5)->create();

        $manager = Employee::factory()->create([
            'full_name' => 'Test Manager',
            'email' => 'manager@test.com',
        ]);
        $manager->assignRole('manager');
    }
}
