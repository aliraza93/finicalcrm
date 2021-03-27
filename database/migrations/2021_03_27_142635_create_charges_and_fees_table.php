<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargesAndFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges_and_fees', function (Blueprint $table) {
            $table->id();
            $table->string('business_website');
            $table->string('percent_ownership');
            $table->string('billing_type');
            $table->string('number_of_days_to_get_products');
            $table->string('estimated_average_monthly_credit_card_sales');
            $table->string('estimated_average_individual_credit_card_sales');
            $table->string('estimated_highest_individual_credit_card_sales');
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
        Schema::dropIfExists('charges_and_fees');
    }
}
