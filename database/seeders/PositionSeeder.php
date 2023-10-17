<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Position::factory(5)->create();

        // Вручную me
        Position::create([
            'title' => 'Nachalnika',
            'department_id' => Department::inRandomOrder()->first()->id,
        ]);
        Position::create([
            'title' => 'Boss',
            'department_id' => Department::inRandomOrder()->first()->id,
        ]);
        Position::create([
            'title' => 'Worker',
            'department_id' => Department::inRandomOrder()->first()->id,
        ]);
        Position::create([
            'title' => 'Specialist',
            'department_id' => Department::inRandomOrder()->first()->id,
        ]);
        Position::create([
            'title' => 'doctor',
            'department_id' => Department::inRandomOrder()->first()->id,
        ]);
    }
}
