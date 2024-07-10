<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = new Train();
        $train->company = 'FS';
        $train->departure_station = 'Varese';
        $train->arrival_station = 'Torino';
        $train->departure_date = '2024-07-10';
        $train->departure_time = '10:30:00';
        $train->arrival_date = '2024-07-10';
        $train->arrival_time = '13:20:00';
        $train->train_code = 2309;
        $train->coach_number = 9;
        $train->on_schedule = 1;
        $train->cancelled = 0;
        $train->save();
    }
};
 	 	 	 	 	 	 	 	 	 	 	