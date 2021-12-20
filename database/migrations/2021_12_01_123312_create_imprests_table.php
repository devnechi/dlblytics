<?php

use App\PillarActivities;
use App\PillarProject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImprestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imprests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PillarProject::class)->nullable();
            $table->foreignIdFor(PillarActivities::class)->nullable();
            $table->string('imp_title');
            $table->string('current_stage');
            $table->string('status')->nullable();
            $table->string('doc_path');
            $table->integer('requested_by');
            $table->integer('pillar_id');
            $table->json('reviewed_by')->nullable;
            $table->string('ref_no');
            $table->longText('purpose');
            $table->float('amount_rqst');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
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
        Schema::dropIfExists('imprests');
    }
}
