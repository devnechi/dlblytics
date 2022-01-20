<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PillarManagerRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $role = ['data science manager', 'capacity building manager', 'research & innovation manager', 'institutional strenthening manager', 'community engagement manager','Communications Channel Manager'];

        foreach(range(0, 5) as $index){
            DB::table('pillar_manager_role_tbl')->insert([
                'role_title' => $role[$index],
                'date_created' => now(),
                'date_updated' => now()
                ]);
            }
    }
}
