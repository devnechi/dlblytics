<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dlab_departments', function (Blueprint $table) {
            $table->increments('dept_id');
            $table->string('created_by');
            $table->string('dept_title');
            $table->integer('dept_manager_id');
            $table->string('dept_description');
            $table->float('total_fund_allocation');
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
        Schema::dropIfExists('dept');
    }
}
