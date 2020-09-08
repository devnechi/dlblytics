<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpidatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpiTable', function (Blueprint $table) {
            $table->increments('kpi_id');
            $table->integer('creators_id');
            $table->string('kpi_title');
            $table->longText('kpi_desc');
            $table->string('dc_timing');
            $table->string('fq_of_dc');
            $table->string('classification');
            $table->string('unit_of_measure');
            $table->string('method_of_dc');
            $table->string('dissaggregate');
            $table->longText('formula');
            $table->string('reporting_respns');
            $table->string('target_value');
            $table->string('tolerance_band');
            $table->string('last_approved');
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
        Schema::dropIfExists('kpidatas');
    }
}
