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
        Schema::create('aziende', function (Blueprint $table) {
            $table->bigIncrements('aziendeId');
            $table->string('ragionesociale',25);
            $table->string('tipologia',30);
            $table->string('desc',2500);
            $table->string('citta',30);
            $table->string('via',30);
            $table->string('cap',5);
            $table->text('image')->nullable();
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
        Schema::droplfExist('aziende');
    }
};
