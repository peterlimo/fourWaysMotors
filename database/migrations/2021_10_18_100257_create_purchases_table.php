<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('make');
            $table->string('y_o_m');
            $table->string('color');
            $table->string('reg_no');
            $table->string('log_book_no');
            $table->string('engine_no');
            $table->string('chasis_no');
            $table->string('price');
            $table->string('surplier_type');
            $table->string('company_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('city');
            $table->string('phone_no');
            $table->string('email');
            $table->string('national_id');
            $table->string('kra_pin');
            $table->string('purchase_date');
            $table->string('description');
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
        Schema::dropIfExists('purchases');
    }
}
