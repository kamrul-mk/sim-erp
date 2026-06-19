<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $permissions = [

        // Student
        ['name' => 'View Student', 'slug' => 'student.view', 'module' => 'Student'],
        ['name' => 'Create Student', 'slug' => 'student.create', 'module' => 'Student'],
        ['name' => 'Edit Student', 'slug' => 'student.edit', 'module' => 'Student'],
        ['name' => 'Delete Student', 'slug' => 'student.delete', 'module' => 'Student'],

        // Student Attendance
        ['name' => 'View Student Attendance', 'slug' => 'student_attendance.view', 'module' => 'Attendance'],
        ['name' => 'Create Student Attendance', 'slug' => 'student_attendance.create', 'module' => 'Attendance'],
        ['name' => 'Edit Student Attendance', 'slug' => 'student_attendance.edit', 'module' => 'Attendance'],
        ['name' => 'Attendance Report', 'slug' => 'student_attendance.report', 'module' => 'Attendance'],

        // Teacher
        ['name' => 'View Teacher', 'slug' => 'teacher.view', 'module' => 'Teacher'],
        ['name' => 'Create Teacher', 'slug' => 'teacher.create', 'module' => 'Teacher'],
        ['name' => 'Edit Teacher', 'slug' => 'teacher.edit', 'module' => 'Teacher'],

        // Fees
        ['name' => 'View Fees', 'slug' => 'fee.view', 'module' => 'Finance'],
        ['name' => 'Collect Fees', 'slug' => 'fee.collect', 'module' => 'Finance'],
        ['name' => 'Edit Fees', 'slug' => 'fee.edit', 'module' => 'Finance'],

        // Result
        ['name' => 'View Result', 'slug' => 'result.view', 'module' => 'Exam'],
        ['name' => 'Publish Result', 'slug' => 'result.publish', 'module' => 'Exam'],

        // Certificate
        ['name' => 'Generate Certificate', 'slug' => 'certificate.generate', 'module' => 'Certificate'],

        // Notice
        ['name' => 'Publish Notice', 'slug' => 'notice.publish', 'module' => 'Notice'],
    ];

    foreach ($permissions as $permission) {
        \App\Models\Permission::create([
            'name' => $permission['name'],
            'slug' => $permission['slug'],
            'module' => $permission['module'],
            'status' => true,
        ]);
    }
}
}
