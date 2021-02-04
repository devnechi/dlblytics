<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $dept = ['IT', 'Human Resourse', 'Procument', 'Account & Finance'];
        DB::table('dlab_departments')->insert([
            'dept_title' =>  $faker->randomElement($dept),
            'dept_manager_id' => '1',
            'dept_description' => Str::random(10),
            'date_created' => now(),
            'date_updated' => now()
            ]);

    }
}
