<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Hajera',
                'student_id_number' => 'F55123047',
                'email' => 'hajerajewa@gmail.com',
                'phone_number' => '085233456785',
                'birth_date' => '2000-01-01',
                'gender' => 'Female',
                'status' => 'active',
                'major_id' => 1,
        
            ],
            [
                'name' => 'Novita',
                'student_id_number' => 'F55123002',
                'email' => 'novi@gmail.com',
                'phone_number' => '082290471649',
                'birth_date' => '2000-01-01',
                'gender' => 'Female',
                'status' => 'Inactive',
                'major_id' => 2,
            ],
        ]);
    }
}
