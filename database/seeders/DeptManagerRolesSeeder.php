<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class DeptManagerRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $role = ['IT dept manager', 'Account dept manager', 'Procurement dept manager', 'Human Resource dept manager', 'MnE dept manager'];

        foreach(range(0, 4) as $index){
            DB::table('dept_manager_role_tbl')->insert([
                'role_title' => $role[$index],
                'date_created' => now(),
                'date_updated' => now()
                ]);
            }
    }
}
