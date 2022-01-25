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
        $role = [
            'admin', 'manager', 'user', 'finance admin', 'mne,', 'cb-pillar-manager', 'is-pillar-manager', 'ri-pillar-manager', 'ce-pillar-manager', 'ds-pillar-manager', 'research-innovation-dashboard',
            'capacity-building-dashboard', 'institutional-strengthening-dashboard', 'community-engagement-dashboard', 'data-science-dashboard', 'communication-channels-dashboard',
            'dlab-donors-dashboard', 'members-area-dashboard'
        ];


        foreach (range(0, 17) as $index) {
            DB::table('pillar_manager_role_tbl')->insert([
                'role_title' => $role[$index],
                'date_created' => now(),
                'date_updated' => now()
            ]);
        }
    }
}
