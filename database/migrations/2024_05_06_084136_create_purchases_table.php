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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->string('invoice_no')->nullable();
            $table->integer('warehouse_id')->unsigned()->nullable();
            $table->date('purchase_date')->nullable();
            $table->decimal('total_price')->nullable();
            $table->decimal('discount_amount')->nullable();
            $table->decimal('payable_amount')->nullable();
            $table->decimal('paid_amount')->nullable();
            $table->decimal('due_amount')->nullable();
            $table->text('note')->nullable();
            $table->boolean('return_status')->default(0); 
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
};
