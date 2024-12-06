<?php

namespace Database\Seeders;

use App\Models\CustomerBooks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CustomerBooks::factory()
        ->count(10)
        ->create();
    }
}
