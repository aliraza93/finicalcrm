<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_fees', function (Blueprint $table) {
            $table->id();
            $table->string('setup_fee');
            $table->string('batch_fee');
            $table->string('address_verification');
            $table->string('account_on_file_fee_monthly');
            $table->string('wireless_activation_fee');
            $table->string('gateway_setup_fee');
            $table->string('annual_fee');
            $table->string('wireless_monthly_fee');
            $table->string('gateway_transaction_fee');
            $table->string('retireval_fee');
            $table->string('monthly_minimum_fee');
            $table->string('gateway_monthly_fee');
            $table->string('chargeback_fee');
            $table->string('monthly_membership_fee');
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
        Schema::dropIfExists('service_fees');
    }
}
