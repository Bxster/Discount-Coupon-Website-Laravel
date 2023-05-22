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
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('userId');
            $table->string('name');
            $table->string('surname');
            $table->string('cellulare', 10);
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',20);
            $table->string('password');
            $table->string('role',10)->default('user');
            $table->integer('genere'); //0=maschio, 1=femmina
            $table->date('dataNascita');
            $table->rememberToken();
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
        Schema::droplfExist('user');
    }
};
