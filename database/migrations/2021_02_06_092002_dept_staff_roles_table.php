<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeptStaffRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('dept_staff_role_tbl', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('role_title');
            $table->string('role_desc');
            $table->timestamp('date_created');
            $table->timestamp('date_updated');
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
        //\
        Schema::dropIfExists('dept_staff_role_tbl');

    }
}
