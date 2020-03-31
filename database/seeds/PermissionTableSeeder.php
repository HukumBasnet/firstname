<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $permissions = [
                'Dashboard',
                'Statements',
                'Attendence',
                'Classes & Sections',
                'Students',
                'Teachers',
                'Exams',
                'Grades',
                'Class Routines',
                'Syllabus',
                'Notice',
                'Event',
                'Academic Settings',
                'Manage GPA',
                'Fees Generator',
                'Manage Accounts',
                'Manage Library'


             ];
     
     
             foreach ($permissions as $permission) {
                  Permission::create(['name' => $permission]);
             }
         }
    }
}
