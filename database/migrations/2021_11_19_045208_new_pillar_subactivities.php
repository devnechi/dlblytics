<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewPillarSubActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pillar_subactivities', function (Blueprint $table) {
            $table->id();
            $table->string('subact_title');
            $table->string('created_by');
            $table->Integer('activity_ref_id');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('subact_desc');
            $table->json('subact_objectives');
            $table->string('total_subactivity_cost');
            $table->Integer('pillar_ref_id');
            $table->string('full_doc_url');
            $table->string('sent_to');
            $table->string('current_stage');
            $table->string('review_status');
            $table->string('approval_status');
            $table->Integer('imprest_id');
            $table->string('country');
            $table->string('region')->nullable();
            $table->string('venue');
            $table->json('pinvolved');
            $table->string('date_approved');
            $table->string('date_reviewed');
            $table->string('date_created');
            $table->string('date_updated');
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
        Schema::dropIfExists('pillar_subactivities');
    }
}
