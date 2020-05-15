<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Elnathan Timothy dela Cruz',
            'email' => 'etcdc08141998@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('camper14'),
            'college' => 'CIC',
            'course' => 'BSIT',
            'type' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Axl Supera',
            'email' => 'superaxl123@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'college' => 'CIC',
            'course' => 'BSIT',
            'type' => 'Student',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
