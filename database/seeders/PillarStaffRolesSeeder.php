<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PillarStaffRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $role = ['data science staff', 'capacity building staff', 'research & innovation staff', 'institutional strenthening staff', 'community engagement staff'];

        foreach(range(1, 6) as $index){
            DB::table('pillar_staff_role_tbl')->insert([
                'role_title' => $faker->randomElement($role),
                'date_created' => now(),
                'date_updated' => now()
                ]);
            }
    }
}
