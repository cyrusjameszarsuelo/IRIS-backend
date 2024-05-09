<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(PreferredPoistionSeeder::class);
        $this->call(LicenseSeeder::class);
        $this->call(PreferredLocationSeeder::class);
        $this->call(SourcesSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(SalutationSeeder::class);
        $this->call(EducationSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
