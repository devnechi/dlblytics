<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FakeUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = User::class;

    protected $model = App\Models\User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $faker->randomElement(['male', 'female']);
        $mrtstatus = $faker->randomElement(['single', 'marrie', 'divorced', 'widow', 'widower', 'bachelor', 'spinster']);
        $ntlty = $faker->randomElement(['Tanzania', 'Kenya', 'Uganda', 'other']);
        $dept = $faker->randomElement(['IT', 'Human Resourse', 'Procument', 'Account & Finance']);
        $pillar = $faker->randomElement(['Data Science', 'Capacity Building', 'Research & Innovation', 'Community Engagement']);
         $bnk = $faker->randomElement(['CRDB', 'Exim', 'NMD']);
         $crny = $faker->randomElement(['USD', 'TZ']);
         $wrktype = $faker->randomElement(['full-time', 'part-time', 'consulting']);
         $sts_id = $faker->randomElement(['active', 'suspended', 'deleted']);

        return [
            //'subscriber_email' => $faker->unique()->safeEmail,
            'user_email'    => $this->faker->fname . '@gmail.com',
            'fname'     => $this->faker->fname,
            'mname' => $this->faker->mname,
            'lname' => $this->faker->lname,
            'phoneNumber'    => $this->faker->phoneNumber,
            'emegency_contact'     => $this->faker->phoneNumber,
            'dob'          => now(),
            'gender'               => $gender,
            'martialstatus'        => $mrtstatus,
            'nationality'       => $ntlty,
            'address'       => Str::random(20),
            'Department'       => $dept,
            'Pillar'       => $pillar,
            'driving_license'       => Str::random(10),
            'tin_number'       => Str::random(10),
            'job_description'       => Str::random(200),
            'bankusername'       => Str::random(10),
            'bankname'       => $bnk,
            'bankaccnumber'       => Str::random(10),
            'currencyType'       => $crny,
            'bankaccnumber'       => Str::random(10),
            'totalsalary'       => Str::random(10),
            'working_type'       => $wrktype,
            'acc_status'       => $usraccstatus,
            'user_photo_url'       => $wrktype,
            'added_by'       => 1,
            'status_id'       => $sts_id,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'email_status'        => '1'
        ];
    }
}
