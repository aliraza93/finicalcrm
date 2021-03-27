<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_details', function (Blueprint $table) {
            $table->id();
            $table->string('business_type');
            $table->string('process_transaction');
            $table->string('service_sold');
            $table->string('business_address');
            $table->string('business_street');
            $table->string('business_city');
            $table->string('business_state');
            $table->string('business_zip');
            $table->integer('same_as_business_address')->default(0);
            $table->string('shipping_address');
            $table->string('shipping_street');
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_zip');
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
        Schema::dropIfExists('address_details');
    }
}
