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
        Schema::create('severals', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('hour');
            $table->integer('quantity');
            $table->decimal('value');
            $table->string('payment_method');
            $table->string('type');
            $table->string('who_receives');
            $table->text('observations')->nullable();
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
        Schema::dropIfExists('severals');
    }
};