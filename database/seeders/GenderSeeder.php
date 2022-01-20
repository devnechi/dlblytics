<?php

namespace Database\Seeders;


use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $gender = ['male', 'female'];

        // foreach(range(1, 2) as $index){
        //     DB::table('genders_tbl')->insert([
        //         'gender_title' => $faker->randomElement($gender),
        //         'date_created' => now(),
        //         'date_updated' => now()
        //         ]);
        //     }

    }
}
