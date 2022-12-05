<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::truncate();

        Reservation::create([
            'date_from' => '10.12.2022',
            'date_to' => '15.12.2022',
            'room_id' => 1,
            'guest_id' => 2
        ]);

        Reservation::create([
            'date_from' => '12.12.2022',
            'date_to' => '22.12.2022',
            'room_id' => 2,
            'guest_id' => 3
        ]);
        Reservation::create([
            'date_from' => '20.12.2022',
            'date_to' => '31.12.2022',
            'room_id' => 3,
            'guest_id' => 2
        ]);
        Reservation::create([
            'date_from' => '25.12.2022',
            'date_to' => '05.01.2023',
            'room_id' => 4,
            'guest_id' => 3
        ]);
        Reservation::create([
            'date_from' => '05.12.2022',
            'date_to' => '31.12.2022',
            'room_id' => 5,
            'guest_id' => 6
        ]);

    }
}
