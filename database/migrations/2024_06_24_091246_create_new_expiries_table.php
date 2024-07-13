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
        Schema::create('new_expiries', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_code')->nullable();
            $table->date('expiry')->nullable();
            $table->string('productname')->nullable();
            $table->string('location')->nullable();


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
        Schema::dropIfExists('new_expiries');
    }
};
