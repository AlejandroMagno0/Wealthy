<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dish;
use App\Models\Order; 
use App\Models\OrderDetail; 
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

        User::factory()->create([
            'name' => 'Alfred',
            'email' => 'alfred@example.com',
            'password' => bcrypt('123.321A'),
            'email_verified_at' => time(),
        ]);
        Dish::factory()
            ->count(25)
            ->create();

        Order::factory()
            ->count(30)
            ->hasOrderDetails(5)
            ->create();
    }
}
