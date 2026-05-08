<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

// importo Faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->start_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->start_time = $faker->dateTimeThisMonth();
            $newTrain->arrival_time = $faker->dateTimeThisMonth();
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->carriages_amount = $faker->randomDigitNot(0);
            $newTrain->is_on_time = $faker->boolean(0.7);
            $newTrain->is_canceled = $faker->boolean(0.05);

            $newTrain->save();
        }
    }
}
