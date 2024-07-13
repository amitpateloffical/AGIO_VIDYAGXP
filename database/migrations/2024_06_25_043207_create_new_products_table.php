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
        Schema::create('new_products', function (Blueprint $table) {
            $table->id();

            $table->string('batch_status')->nullable();
            $table->string('item_code')->nullable();
            $table->string('item_name')->nullable();
            $table->string('location_code')->nullable();
            $table->string('store')->nullable();
            $table->string('grn_batch_id')->nullable();
            $table->string('arn_id')->nullable();
            $table->string('container_no')->nullable();
            $table->string('container_status')->nullable();
            $table->string('brand_name')->nullable();
        
            $table->string('unit')->nullable();
            $table->string('quantity_of_product')->nullable();
            $table->string('weightPerPackage')->nullable();
            $table->string('totalWeight')->nullable();
        
            $table->text('item_description')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('uom_branch')->nullable();
            $table->date('mfg_dt')->nullable();
            
            $table->date('exp_dt')->nullable();
            $table->string('no_of_cont')->nullable();
            
            $table->string('pack_size')->nullable();
            $table->string('count_no')->nullable();
            
            $table->string('rec_qty')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('supplier')->nullable();
            $table->string('grn_no')->nullable();
            $table->date('grn_date')->nullable();
            $table->string('format_no')->nullable();
            $table->string('printed_by')->nullable();
            $table->string('bar_code')->nullable();
            $table->string('product_code')->nullable();
            
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
        Schema::dropIfExists('new_products');
    }
};
