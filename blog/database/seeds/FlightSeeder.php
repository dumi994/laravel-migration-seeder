<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Flight;
class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++){
            $flights = new Flight();
            $flights->destinazione = $faker->country();
            $flights->durata = $faker->numberBetween(5, 25);
            $flights->prezzo = $faker->numberBetween(450, 3500);
            $flights->servizi = $faker->randomElement(['Visite guidate', 'Visite non guidate']);
            $flights->volo = $faker->randomElement(['Milano', 'Firenze', 'Pisa', 'Roma']);
            $flights->pasti = $faker->randomElement(['Pranzo e cena inclusi', 'Cena inclusa', 'SPA e Pensione completa inclusi', 'Nessun servizio incluso', 'Colazione inclusa', 'Pranzo incluso']);
            $flights->poster = $faker->randomElement(['https://picsum.photos/300/200']);
            $flights->save();

        }
    }
}
