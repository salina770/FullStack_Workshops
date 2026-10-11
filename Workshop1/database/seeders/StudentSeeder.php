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
    // StudentSeeder.php
public function run(): void
{
    DB::table('students')->insert([
        ['name' => 'Salina', 'email' => 'salina@example.com', 'fee' => 1200.00],
        ['name' => 'Sanjina', 'email' => 'sanjina@example.com', 'fee' => 1500.00],
    ]);
}

}
