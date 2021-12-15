<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewPillarActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pillar_activities', function (Blueprint $table) {
            $table->increments('pillar_act_id');
            $table->string('act_title');
            $table->string('created_by');
            $table->string('project_ref_id')->nullable();
            $table->string('start_date');
            $table->string('end_date');
            $table->string('act_desc');
            $table->string('total_act_cost');
            $table->string('pillar_ref_id');
            $table->string('current_stage');
            $table->string('review_status');
            $table->string('approval_status');
            $table->string('retirement_id')->nullable();
            $table->string('retirement_status')->nullable();
            $table->string('date_approved');
            $table->string('date_reviewed');
            $table->string('date_created');
            $table->string('date_updated');
            $table->string('country');
            $table->string('region')->nullable();
            $table->string('venue');
            $table->json('pinvolved');
            $table->json('act_objectives');
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
        Schema::dropIfExists('pillar_activities');
    }
}
