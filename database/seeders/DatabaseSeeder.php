<?php

namespace Database\Seeders;

use App\Models\Ticket;
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

        Ticket::create([
            'name' => 'Luka Sculac',
            'email' => 'luka.sculac@gmail.com',
            'department' => 'HR',
            'message' => 'I have a problem with my computer',
        ]);

        Ticket::create([
            'name' => 'Mile Milić',
            'email' => 'mile.milic2@gmail.com',
            'department' => 'Support',
            'message' => 'I need emotional support',
        ]);
    }
}
