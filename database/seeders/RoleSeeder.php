<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Role::insert([
        [
            'name' => 'Super Admin',
            'slug' => 'super_admin',
            'description' => 'Full system access',
            'status' => true,
        ],
        [
            'name' => 'Principal',
            'slug' => 'principal',
            'description' => 'Institution principal',
            'status' => true,
        ],
        [
            'name' => 'Director',
            'slug' => 'director',
            'description' => 'Management director',
            'status' => true,
        ],
        [
            'name' => 'Computer Operator',
            'slug' => 'computer_operator',
            'description' => 'Data entry and office operations',
            'status' => true,
        ],
        [
            'name' => 'Accountant',
            'slug' => 'accountant',
            'description' => 'Accounts and finance',
            'status' => true,
        ],
        [
            'name' => 'Teacher',
            'slug' => 'teacher',
            'description' => 'Teacher role',
            'status' => true,
        ],
        [
            'name' => 'Student',
            'slug' => 'student',
            'description' => 'Student role',
            'status' => true,
        ],
        [
            'name' => 'Guardian',
            'slug' => 'guardian',
            'description' => 'Guardian role',
            'status' => true,
        ],
        [
            'name' => 'Librarian',
            'slug' => 'librarian',
            'description' => 'Library management',
            'status' => true,
        ],
        [
            'name' => 'Hostel Manager',
            'slug' => 'hostel_manager',
            'description' => 'Hostel management',
            'status' => true,
        ],
        [
            'name' => 'Transport Manager',
            'slug' => 'transport_manager',
            'description' => 'Transport management',
            'status' => true,
        ],
    ]);
}
}
