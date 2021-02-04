<?php

use Faker\Provider\ar_JO\Address;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            //fname
            $table->string('fname');
            //mname
            $table->string('mname');
            //lname
            $table->string('lname');
            //password
            $table->string('password');

            //dob
            $table->string('dob');
            //gender
            $table->string('gender_id')->nullable();
            //martialstatus
            $table->string('martialstatus');
            //nationality
            $table->string('nationality');
            //address
            $table->string('address');

            //phonenumber
            $table->string('phonenumber');

            //emegency_contact
            $table->string('emegency_contact');

            //selectDepartment
            $table->string('Department');

            //selectPillar
            $table->string('pillar_id');

            //position
            $table->integer('role')->nullable();
            //driving_license
            $table->string('driving_license');

            //tin_number
            $table->string('tin_number');
            //job_description
            $table->text('job_description');
            //bankusername
            $table->string('bankusername');
            //bankname
            $table->string('bankname');
            //bankaccnumber
            $table->float('bankaccnumber');

            //currencyType
            $table->string('currencyType');

            //totalsalary
            $table->float('totalsalary');

            //working_type
            $table->string('working_type');

            //useraccStatus
            $table->string('acc_status');

            //uploadUserPhoto
            $table->string('user_photo_url');

            //createdby
            $table->integer('added_by');

            //uploadUserContract
            $table->string('user_emp_contact_url');

            $table->string('email')->unique();
            $table->integer('status_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
