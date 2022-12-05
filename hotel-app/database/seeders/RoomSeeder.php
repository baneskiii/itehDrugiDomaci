<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'floor' => 1,
            'area_in_m^2' => 30,
            'number_of_beds' => 2
        ]);

        Room::create([
            'floor' => 1,
            'area_in_m^2' => 35,
            'number_of_beds' => 2
        ]);

        Room::create([
            'floor' => 2,
            'area_in_m^2' => 50,
            'number_of_beds' => 3
        ]);

        Room::create([
            'floor' => 2,
            'area_in_m^2' => 55,
            'number_of_beds' => 3
        ]);

        Room::create([
            'floor' => 3,
            'area_in_m^2' => 60,
            'number_of_beds' => 4
        ]);
    }
}
