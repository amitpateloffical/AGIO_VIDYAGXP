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
        Schema::create('notification_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->nullable();
            $table->string('sender')->nullable();
            $table->string('sent_from')->nullable();
            $table->string('sent_to')->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
            $table->string('notification_type')->nullable();
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
        Schema::dropIfExists('notification_logs');
    }
};
