<?php

use Illuminate\Database\Seeder;

class ChoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choice')->insert([
            'choice' => 'In-class interaction with the faculty',
            'question_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choice')->insert([
            'choice' => 'Quality of feed back that you received from the faculty',
            'question_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choice')->insert([
            'choice' => 'Course work/requirements in your class',
            'question_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choice')->insert([
            'choice' => 'Class schedule for your program',
            'question_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choice')->insert([
            'choice' => 'Mechanisims in your department to support your learning.(e.g Remedial Program, consultation, etc..)',
            'question_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
