<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id');
            $table->float('price');
            $table->string('amount_paid');
            $table->string('balance');
            $table->string('city');
            $table->string('buyer_type');
            $table->string('company_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('phone_number');
            $table->string('kra_pin');
            $table->string('email');
            $table->string('national_id');
            $table->date('sales_date');
            $table->text('description');
            $table->timestamps();

            
            $table->index('car_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
