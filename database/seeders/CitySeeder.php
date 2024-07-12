<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run()
    {
        $cities = [
            ['state_id' => 1, 'name' => 'Thessaloniki'],
            ['state_id' => 1, 'name' => 'Kastoria'],
            ['state_id' => 2, 'name' => 'Larissa'],
            ['state_id' => 3, 'name' => 'Milan'],
            ['state_id' => 3, 'name' => 'Bergamo'],
            ['state_id' => 4, 'name' => 'Florence'],
            ['state_id' => 5, 'name' => 'Barcelona'],
            ['state_id' => 5, 'name' => 'Girona'],
            ['state_id' => 6, 'name' => 'Seville'],
            ['state_id' => 6, 'name' => 'Malaga']
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
