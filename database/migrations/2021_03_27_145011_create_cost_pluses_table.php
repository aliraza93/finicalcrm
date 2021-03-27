<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostPlusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_pluses', function (Blueprint $table) {
            $table->id();
            $table->string('visa_mvc_discover');
            $table->string('amex');
            $table->string('transaction_fee');
            $table->string('authorization_fee');
            $table->integer('pin_debit_processing')->default(0);
            $table->string('pin_debit_transaction_fee');
            $table->integer('ebt')->default(0);
            $table->string('ebt_per_item');
            $table->string('fns_number');
            $table->foreignId('app_id');
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
        Schema::dropIfExists('cost_pluses');
    }
}
