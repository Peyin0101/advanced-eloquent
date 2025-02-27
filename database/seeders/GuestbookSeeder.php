<?php

namespace Database\Seeders;

use App\Models\GuestbookEntry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GuestbookEntry::factory()
            ->count(10)
            ->create();
    }
}