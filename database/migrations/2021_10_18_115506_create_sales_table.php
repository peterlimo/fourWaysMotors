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
            $table->string('model');
            $table->string('make');
            $table->string('color');
            $table->integer('car_id');
            $table->float('price', 12, 2);
            $table->float('amount_paid', 12, 2);
            $table->float('balance', 12, 2);
            $table->string('city');
            $table->string('buyer_type');
            $table->string('y_o_m');
            $table->string('company_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullablle();
            $table->string('middle_name')->nullable();
            $table->string('phone_number');
            $table->string('kra_pin');
            $table->string('email');
            $table->string('national_id')->nullable();
            $table->date('sales_date');
            $table->text('description')->nullable();
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
