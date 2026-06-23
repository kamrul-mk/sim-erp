<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    public function run(): void
    {
        Grade::insert([

            [
                'grade_name' => 'A+',
                'gpa' => 5.00,
                'mark_from' => 80,
                'mark_to' => 100,
                'remarks' => 'Excellent',
                'status' => true,
            ],

            [
                'grade_name' => 'A',
                'gpa' => 4.00,
                'mark_from' => 70,
                'mark_to' => 79,
                'remarks' => 'Very Good',
                'status' => true,
            ],

            [
                'grade_name' => 'A-',
                'gpa' => 3.50,
                'mark_from' => 60,
                'mark_to' => 69,
                'remarks' => 'Good',
                'status' => true,
            ],

            [
                'grade_name' => 'B',
                'gpa' => 3.00,
                'mark_from' => 50,
                'mark_to' => 59,
                'remarks' => 'Above Average',
                'status' => true,
            ],

            [
                'grade_name' => 'C',
                'gpa' => 2.00,
                'mark_from' => 40,
                'mark_to' => 49,
                'remarks' => 'Average',
                'status' => true,
            ],

            [
                'grade_name' => 'D',
                'gpa' => 1.00,
                'mark_from' => 33,
                'mark_to' => 39,
                'remarks' => 'Pass',
                'status' => true,
            ],

            [
                'grade_name' => 'F',
                'gpa' => 0.00,
                'mark_from' => 0,
                'mark_to' => 32,
                'remarks' => 'Fail',
                'status' => true,
            ],

        ]);
    }
}
