<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory(10)->create();

        $testManager = Staff::where('full_name', 'Test Manager')->first();
        Task::factory(10)->create([
            'executor_id' => $testManager->id
        ]);
    }
}