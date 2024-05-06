<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = include(database_path('data/status-data.php'));

        foreach ($data as $statusData) {
            Status::create([
                'type' => $statusData['type'],
                'code' => $statusData['code'],
                'value' => $statusData['value']
            ]);
        }
    }
}
