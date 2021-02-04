<?php

namespace Database\Seeders;

use App\User;
use Database\Factories\FakeUserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;


class newUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $gender = gender->randomElement(['male', 'female']);
        // $genders = DB::table('genders')->insert([
        //     ['gender_title' => 'Male'],
        //     ['gender_title' => 'female']
        // ]);

        //  $genderIds = Genders::pluck('id');

        // DB::table('users')->insert([
        //     'fname' => Str::random(10),
        //     'mname' => Str::random(10),
        //     'lname' => Str::random(10),
        //     'dob' => now(),
        //     'user_email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);


        // // $users = FakeUserFactory::factory()->count(20)->create();
         // \App\User::factory()->count(30)->create();

         $faker = Faker::create();
         $gender = ['male', 'female'];
         $mrtstatus = ['single', 'married', 'divorced', 'widow', 'widower', 'bachelor', 'spinster'];
         $ntlty = ['Tanzania', 'Kenya', 'Uganda', 'other'];
         $dept = [1, 2, 3, 4];
         $pillar = [1, 2, 3, 4, 5, 6];
          $bnk = ['CRDB', 'Exim', 'NMB','Stanbic', 'NBC', 'DTB', 'Barclays', 'Postal Bank'];
          $crny = ['USD', 'TZ'];
          $wrktype = ['full-time', 'part-time', 'consulting'];
          $sts_id = ['active', 'suspended', 'deleted'];
          $usraccstatus = ['pending verification', 'verified', 'suspended'];
          $userroles = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];



         foreach(range(1, 100) as $index){
           DB::table('users')->insert([
             'email'    => $faker->name.'@dlab.or.tz',
             'fname'     => $faker->name,
             'mname' => $faker->name,
             'lname' => $faker->name,
             'phoneNumber'    => $faker->phoneNumber,
             'emegency_contact'     => $faker->phoneNumber,
             'dob'          => now(),
             'role' => $faker->randomElement($userroles),
             'gender_id'               => $faker->randomElement($gender),
             'martialstatus'        => $faker->randomElement($mrtstatus),
             'nationality'       => $faker->randomElement($ntlty),
             'address'       => Str::random(20),
             'Department'       => $faker->randomElement($dept),
             'pillar_id'       => $faker->randomElement($pillar),
             'driving_license'       => Str::random(10),
             'tin_number'       => Str::random(10),
             'job_description'       => Str::random(200),
             'bankusername'       => Str::random(10),
             'bankname'       => $faker->randomElement($bnk),
             'bankaccnumber'       => Str::random(10),
             'currencyType'       => $faker->randomElement($crny),
             'bankaccnumber'       => Str::random(10),
             'totalsalary'       => Str::random(10),
             'working_type'       => $faker->randomElement($wrktype),
             'acc_status'       => $faker->randomElement($usraccstatus),
             'user_photo_url'       => Str::random(10),
             'user_emp_contact_url'  => Str::random(10),
             'added_by'       => 1,
             'status_id'       => $faker->randomElement($sts_id),
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Str::random(10),
             'created_at' => now(),
             'updated_at' => now()
           ]);

           }
    }
}
