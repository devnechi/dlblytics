<?php

use App\Imprest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImprestActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imprest_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Imprest::class)->nullable();
            $table->string('imp_act_name');
            $table->string('imp_type');
            $table->integer('qty');
            $table->string('unit');
            $table->integer('number');
            $table->integer('unit_price');
            $table->integer('total_cost');
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
        Schema::dropIfExists('imprest_activities');
    }
}
