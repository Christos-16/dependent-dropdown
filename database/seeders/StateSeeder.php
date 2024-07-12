<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    public function run()
    {
        $states = [
            ['country_id' => 1, 'name' => 'Macedonia'],
            ['country_id' => 1, 'name' => 'Thessaly'],
            ['country_id' => 2, 'name' => 'Lombardy'],
            ['country_id' => 2, 'name' => 'Tuscany'],
            ['country_id' => 3, 'name' => 'Catalonia'],
            ['country_id' => 3, 'name' => 'Andalusia']
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
