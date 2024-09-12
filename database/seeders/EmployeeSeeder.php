<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Employee::create([
            'name' => 'Cahyo Pratama S',
            'email' => 'cahyopratama2@gmail.com',
            'hire_date' => '2024-09-09',
            'position' => 'FullStack Development',
        ]);
    }
}
