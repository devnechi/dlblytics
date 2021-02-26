<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DeptStaffRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $role = ['IT dept staff', 'Account dept staff', 'Procurement dept staff', 'Human Resource dept staff', 'MnE dept staff'];

        foreach(range(1, 7) as $index){
            DB::table('dept_staff_role_tbl')->insert([
                'role_title' => $faker->randomElement($role),
                'date_created' => now(),
                'date_updated' => now()
                ]);
            }
    }
}
