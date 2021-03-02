<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePillarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dlab_pillars', function (Blueprint $table) {
            $table->increments('pillar_id');
            $table->integer('creators_id');
            $table->integer('managers_id');
            $table->string('pillar_title');
            $table->longText('pillar_desc');
            $table->float('total_fund_allocations');
            $table->string('pillar_status');
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
        Schema::dropIfExists('dlab_pillars');
    }
}
