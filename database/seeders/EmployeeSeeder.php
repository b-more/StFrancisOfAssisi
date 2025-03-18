<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the teacher user - don't create it here, just find it
        $teacherUser = User::where('email', 'teacher@example.com')->first();

        // If no teacher user exists, log an error and continue with other employees
        if (!$teacherUser) {
            \Log::error('Teacher user not found. Run UserSeeder first.');
        } else {
            // Check if this employee already exists
            if (!Employee::where('email', 'teacher@example.com')->exists()) {
                Employee::create([
                    'name' => 'John Smith',
                    'email' => 'teacher@example.com',
                    'phone' => '260977123457',
                    'role' => 'teacher',
                    'department' => 'Science',
                    'position' => 'Senior Teacher',
                    'joining_date' => now()->subYears(2),
                    'status' => 'active',
                    'basic_salary' => 5000.00,
                    'employee_id' => 'EMP001',
                    'user_id' => $teacherUser->id,
                ]);
            }
        }

        // Create some admin staff if they don't exist
        if (!Employee::where('email', 'sarah@example.com')->exists()) {
            Employee::create([
                'name' => 'Sarah Johnson',
                'email' => 'sarah@example.com',
                'phone' => '260977123459',
                'role' => 'admin',
                'department' => 'Administration',
                'position' => 'School Secretary',
                'joining_date' => now()->subYears(3),
                'status' => 'active',
                'basic_salary' => 4500.00,
                'employee_id' => 'EMP002',
                'user_id' => null,
            ]);
        }

        // Create more teaching staff
        $departments = ['Mathematics', 'English', 'Social Studies', 'Science', 'Physical Education'];
        $positions = ['Junior Teacher', 'Senior Teacher', 'Department Head', 'Vice Principal'];

        // Check how many additional employees we need to create
        $additionalEmployeeCount = Employee::where('email', '!=', 'teacher@example.com')
                                 ->where('email', '!=', 'sarah@example.com')
                                 ->count();

        // Create additional employees only if we have fewer than expected
        if ($additionalEmployeeCount < 18) { // 15 teachers + 3 support staff
            $startIndex = Employee::count() + 1;
            $endIndex = $startIndex + (18 - $additionalEmployeeCount);

            for ($i = $startIndex; $i <= $endIndex; $i++) {
                // Generate a unique email to avoid duplicates
                $email = 'employee' . $i . '@example.com';

                if (!Employee::where('email', $email)->exists()) {
                    $isTeacher = $i <= ($startIndex + 14); // First 15 are teachers

                    Employee::create([
                        'name' => fake()->name(),
                        'email' => $email,
                        'phone' => '26097' . fake()->numberBetween(1000000, 9999999),
                        'role' => $isTeacher ? 'teacher' : 'support',
                        'department' => $isTeacher ?
                            $departments[array_rand($departments)] :
                            'Support Services',
                        'position' => $isTeacher ?
                            $positions[array_rand($positions)] :
                            fake()->randomElement(['IT Support', 'Librarian', 'Lab Assistant', 'Maintenance']),
                        'joining_date' => now()->subMonths(fake()->numberBetween(1, 48)),
                        'status' => 'active',
                        'basic_salary' => $isTeacher ?
                            fake()->numberBetween(3000, 6000) :
                            fake()->numberBetween(2000, 4000),
                        'employee_id' => 'EMP' . str_pad($i, 3, '0', STR_PAD_LEFT),
                        'user_id' => null,
                    ]);
                }
            }
        }
    }
}
