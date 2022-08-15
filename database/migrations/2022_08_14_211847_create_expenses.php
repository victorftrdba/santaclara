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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->date('expense_date');
            $table->string('type');
            $table->string('provider_name');
            $table->string('code');
            $table->decimal('value');
            $table->decimal('discount');
            $table->decimal('total');
            $table->date('payment_date');
            $table->string('source_account');
            $table->string('source_account_type');
            $table->unsignedBigInteger("unity_id");
            $table->foreign("unity_id")->references("id")->on("unities")->onDelete("cascade");
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
        Schema::dropIfExists('expenses');
    }
};