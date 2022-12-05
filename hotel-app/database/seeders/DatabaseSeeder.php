<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        User::create([
            'name' => 'Bane',
            'email' => 'bane@bane.rs',
            'password' => bcrypt('bane'),
        ]);

        User::create([
            'name' => 'Luka',
            'email' => 'luka@luka.rs',
            'password' => bcrypt('luka'),
        ]);

        User::create([
            'name' => 'Anja',
            'email' => 'anja@anja.rs',
            'password' => bcrypt('anja'),
        ]);

        $this->call([
            RoomSeeder::class,
            GuestSeeder::class,
            ReservationSeeder::class
        ]);

    }
}
