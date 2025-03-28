<?php

namespace Database\Seeders;

use App\Models\project;
use App\Models\tasks;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(5)->create();
        project::factory(20)->create();
        tasks::factory(80)->create();
    }
}