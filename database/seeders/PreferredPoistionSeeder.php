<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PreferredPoistionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = array(
            'Booked',
            'Complete pass',
            'Complete pass Invoiced',
            'Duplicate',
            'Invalid Memorial Inspector',
            'Invalid Scheme',
            'Invalid Category',
            'Invalid Memorial Height',
            'Invalid Installer',
            'Complete Fail',
            'Unbooked',
            'Invalid Section',
        );

        foreach ($values as $value) {
            Status::create([
                'status' => $value,
            ]);
        }
    }
}
