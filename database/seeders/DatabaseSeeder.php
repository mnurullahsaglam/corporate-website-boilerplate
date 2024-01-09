<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mehmet Nurullah Sağlam',
            'email' => 'nurullahsl87@gmail.com',
        ]);

        $this->call([
            SettingSeeder::class,
        ]);
    }
}
