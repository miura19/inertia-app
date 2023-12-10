<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flight::create([
            'user_id' => '1',
            'airline_company' => 'エバー航空',
            'departure_time' => '2023-12-16 10:25',
            'departure_city' => '東京（羽田）TARMINAL 3',
            'arrival_time' => '2023-12-16 13:25',
            'arrival_city' => '台北（松山空港）TARMINAL 1',
            'class' => 'エコノミー（S）',
            'flight_time' => '4時間0分',
            'eat' => true,
            'flight_distance' => '1303マイル',
            'equipment' => '781',
            'reservation_number' => '6FCAOE',
        ]);
    }
}
