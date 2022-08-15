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
        Schema::create('toxicologicals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("unity_id");
            $table->string("indicated_by");
            $table->string("laboratory")->comment("Caep/Labet/DB/Sodré");
            $table->string("cod_exam");
            $table->string("date_exam");
            $table->time("time_exam");
            $table->string("client_name");
            $table->string("cpf");
            $table->string("birth_date");
            $table->string("gender");
            $table->string("email");
            $table->string("cell");
            $table->string("zipcode");
            $table->string("address");
            $table->string("complement")->nullable();
            $table->string("number");
            $table->string("district");
            $table->string("city");
            $table->string("state");
            $table->boolean("uses_psychoactive_substances")->nullable();
            $table->boolean("examVoucher")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toxicological');
    }
};