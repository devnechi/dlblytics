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
            $table->increments('id');
            //fname
            $table->string('fname');
            //mname
            $table->string('mname');
            //lname
            $table->string('lname');
            //dob
            $table->string('dob');
            //gender
            $table->string('gender');
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
            $table->string('selectDepartment');

            //selectPillar
            $table->string('selectPillar');

            //position
            $table->integer('role')->nullable();
            //driving_license
            $table->string('driving_license');

            //tin_number
            $table->string('tin_number');
            //job_description
            $table->string('job_description');
            //bankusername
            $table->string('bankusername');
            //bankname
            $table->string('bankname');
            //bankaccnumber
            $table->number('bankaccnumber');

            //currencyType
            $table->string('currencyType');

            //totalsalary
            $table->number('totalsalary');

            //working_type
            $table->string('working_type');

            //useraccStatus
            $table->string('useraccStatus');

            //uploadUserPhoto
            $table->string('uploadUserPhoto');

            //createdby
            $table->integer('creator_id');

            //uploadUserContract
            $table->string('email')->unique();
            $table->integer('status_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
