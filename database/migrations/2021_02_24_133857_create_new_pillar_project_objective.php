<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewPillarProjectObjective extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_pillar_project_objective', function (Blueprint $table) {
            $table->increments('project_objective_id');
            $table->string('project_id');
            $table->string('objective_content');
            $table->string('date_created');
            $table->string('date_updated');
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
        Schema::dropIfExists('new_pillar_project_objective');
    }
}
