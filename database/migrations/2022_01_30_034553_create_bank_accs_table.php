<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobank_akks', function (Blueprint $table) {
            $table->increments('akk_id');
            $table->string('creator_id');
            $table->string('acctitle');
            $table->string('bankname');
            $table->string('bankaccno');
            $table->string('bankaccountbalance')->unique();
            $table->string('currencyType');
            $table->string('banklocation');
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
        Schema::dropIfExists('cobank_akks');
    }
}
