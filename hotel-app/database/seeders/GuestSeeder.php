<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guest::truncate();

        Guest::create([
            'first_name' => 'Ivan',
            'last_name' => 'Ivanovic',
            'birthdate' => '15.09.1992',
        ]);

        Guest::create([
            'first_name' => 'Jovana',
            'last_name' => 'Jovanovic',
            'birthdate' => '05.03.1995',
        ]);

        Guest::create([
            'first_name' => 'Zika',
            'last_name' => 'Zikic',
            'birthdate' => '01.06.2000',
        ]);

        Guest::create([
            'first_name' => 'Ana',
            'last_name' => 'Anic',
            'birthdate' => '08.01.2001',
        ]);

        Guest::create([
            'first_name' => 'Luka',
            'last_name' => 'Lukic',
            'birthdate' => '06.12.1999',
        ]);

        Guest::create([
            'first_name' => 'Vesna',
            'last_name' => 'Vesnic',
            'birthdate' => '07.04.2002',
        ]);
    }
}
