<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'q_question' => 'How satisfied are you with your academic experience based on the following criteria?',
            'choice_id' => '1',
            'faculty_id' => '1',
            'description' => 'Student Evaluation Form',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
