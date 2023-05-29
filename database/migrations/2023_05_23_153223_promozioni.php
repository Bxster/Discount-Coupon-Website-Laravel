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
        Schema::create('promozioni', function (Blueprint $table) {
            $table->bigIncrements('promId');
            $table->string('nome');
            $table->string('oggetto');
            $table->string('modalita');
            $table->date('tempi_fruizione');
            $table->string('luoghi_fruizione');
            $table->bigInteger('aziendeId')->unsigned()->index();
            $table->foreign('aziendeId')->references('aziendeId')->on('aziende')->onDelete('cascade');
            $table->integer('numeroCoupon')->default(0);
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
        Schema::droplfExist('promozioni');
    }
};
