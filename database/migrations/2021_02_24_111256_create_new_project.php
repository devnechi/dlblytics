<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pillar_projects', function (Blueprint $table) {
            $table->increments('project_id');
            $table->string('project_title')->unique();
            $table->string('project_lead_id');
            $table->string('created_by');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('kpi_reference_id');
            $table->string('project_desc');
            $table->string('total_project_cost');
            $table->string('pillar_ref_id');
            $table->string('full_doc_url');
            $table->string('sent_to');
            $table->string('current_stage');
            $table->string('review_status');
            $table->string('approval_status');
            $table->string('total_cost_estimate');
            $table->float('total_funds_allocated');
            $table->string('retirement_id')->nullable();
            $table->string('retirement_status')->nullable();
            $table->string('date_approved');
            $table->string('date_reviewed');
            $table->string('date_created');
            $table->string('date_updated');
            $table->string('lead')->nullable();
            $table->json('project_funders')->nullable();
            $table->json('project_partiners')->nullable();
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
        Schema::dropIfExists('pillar_projects');
    }
}
