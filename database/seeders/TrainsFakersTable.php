<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsFakersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $companies = ['FS', 'Italo', 'Trenord', 'Frecciarossa', 'Tilo'];
        $cities = ['L\'Aquila', 'Pescara', 'Chieti', 'Teramo', 'Avezzano',        
        'Potenza', 'Matera', 'Melfi', 'Pisticci', 'Policoro',             
        'Catanzaro', 'Reggio Calabria', 'Cosenza', 'Lamezia Terme', 'Crotone',
        'Napoli', 'Salerno', 'Caserta', 'Benevento', 'Avellino',        
        'Bologna', 'Modena', 'Parma', 'Reggio Emilia', 'Ferrara',           
        'Trieste', 'Udine', 'Pordenone', 'Gorizia', 'Monfalcone',          
        'Roma', 'Latina', 'Frosinone', 'Viterbo', 'Rieti',           
        'Genova', 'La Spezia', 'Savona', 'Imperia', 'Rapallo',         
        'Milano', 'Bergamo', 'Brescia', 'Monza', 'Como', 'Varese', 'Induno Olona', 'Gallarate', 'Malpensa', 
        'Lugano', 'Bellinzona', 'Locarno', 'Mendrisio', 'Chiasso',                
        'Ancona', 'Pesaro', 'Urbino', 'Macerata', 'Ascoli Piceno',    
        'Campobasso', 'Isernia', 'Termoli', 'Venafro', 'Agnone',      
        'Torino', 'Novara', 'Alessandria', 'Asti', 'Cuneo',             
        'Bari', 'Taranto', 'Lecce', 'Foggia', 'Brindisi',             
        'Cagliari', 'Sassari', 'Nuoro', 'Oristano', 'Olbia',            
        'Palermo', 'Catania', 'Messina', 'Siracusa', 'Trapani',        
        'Firenze', 'Pisa', 'Siena', 'Livorno', 'Arezzo',               
        'Trento', 'Bolzano', 'Merano', 'Rovereto', 'Bressanone',           
        'Perugia', 'Terni', 'Foligno', 'Spoleto', 'Città di Castello',
        'Aosta', 'Saint-Vincent', 'Châtillon', 'Sarre', 'Pont-Saint-Martin',
        'Venezia', 'Verona', 'Padova', 'Vicenza', 'Treviso'];
        

        for ($i = 0; $i<94; $i++) {

            $company = $companies[array_rand($companies)];
            $departure_city = $cities[array_rand($cities)];

            do {
                $arrival_city = $cities[array_rand($cities)];
            } while ($arrival_city == $departure_city);


            $date_departure = $faker->dateTimeInInterval('-3 days', '+1 week');
            $date_arrival = (clone $date_departure)->modify('+'.rand(1, 24).' hours');  


            $train = new Train();
            $train->company = $company;
            $train->departure_station = $departure_city;
            $train->arrival_station = $arrival_city;
            $train->departure_date = $date_departure->format('Y-m-d');
            $train->departure_time = $date_departure->format('H:i:s');
            $train->arrival_date = $date_arrival->format('Y-m-d');
            $train->arrival_time = $date_arrival->format('H:i:s');
            $train->train_code = $faker->bothify('####');
            $train->coach_number =$faker->numberBetween(1, 20);
            $train->on_schedule = $faker->boolean();;
            $train->cancelled = $faker->boolean();;
            $train->save();

        }
        
    }
}
