<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // CourseSeeder.php
public function run(): void
{
    DB::table('courses')->insert([
        ['title' => 'Web Development Basics', 'description' => 'Intro to HTML, CSS, JS', 'difficulty' => 'beginner'],
        ['title' => 'Advanced Laravel', 'description' => 'Deep dive into Laravel features', 'difficulty' => 'advanced'],
    ]);
}

}
