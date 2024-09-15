<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 30; $i++){
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->track = $faker->randomDigitNotNull();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->departure_time = $faker->time('H:i');
            $new_train->arrival_time = $faker->time('H:i');
            $new_train->train_code = $faker->numerify('####');
            $new_train->number_of_carriages = $faker->numberBetween(1, 30);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->save();
        }
    }
}
