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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            
            $table->integer('customer_id')->unsigned();
            $table->string('invoice_no')->nullable();
            $table->integer('warehouse_id')->unsigned();
            $table->date('sale_date')->nullable();
            $table->decimal('total_price')->nullable(); 
            $table->decimal('discount_amount')->nullable();
            $table->decimal('receivable_amount')->nullable();
            $table->decimal('received_amount')->nullable();
            $table->decimal('due_amount')->nullable();
            $table->text('note')->nullable();
            $table->integer('return_status')->nullable()->default(0);

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
        Schema::dropIfExists('sales');
    }
};
