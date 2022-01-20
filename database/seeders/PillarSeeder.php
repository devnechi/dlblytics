<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PillarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $pillar = ['Data Science', 'Community Engagement', 'Capacity Building', 'Research & Innovation', 'Institutional Strengthening','Communications Channel'];

        foreach(range(0, 5) as $index){
           DB::table('dlab_pillars')->insert([
            'creators_id' => 1,
            'managers_id' => 1,
            'pillar_title' => $pillar[$index],
            'pillar_desc' => now(),
            'pillar_status' => 'active',
            'date_created' => now(),
            'date_updated' => now()
             ]);
        }

    }
}
