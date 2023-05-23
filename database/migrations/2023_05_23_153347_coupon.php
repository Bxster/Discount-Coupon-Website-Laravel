<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon', function (Blueprint $table) {
            $table->bigIncrements('couponId');
            $table->string('codice')->unique();
            //$table->BigInteger('promoId')->unsigned()->index();
            //$table->BigInteger('userId')->unsigned()->index();
            //$table->foreign('promId')->references('couponId')->on('promozioni');
            //$table->foreign('userId')->references('couponId')->on('user');
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
        Schema::droplfExist('coupon');
    }
};
