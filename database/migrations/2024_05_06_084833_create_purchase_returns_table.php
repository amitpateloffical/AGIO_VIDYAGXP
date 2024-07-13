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
        Schema::create('purchase_returns', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_id')->unsigned()->nullable();
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->date('return_date')->nullable();
            $table->decimal('total_price')->nullable();
            $table->decimal('discount_amount')->nullable();
            $table->decimal('receivable_amount')->nullable();
            $table->decimal('received_amount')->nullable();
            $table->decimal('due_amount')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('purchase_returns');
    }
};
