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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->string('sms_body')->nullable();
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('cur_text')->nullable();
            $table->string('cur_sym')->nullable();
            $table->string('email_from')->nullable();
            $table->text('email_template')->nullable();
            $table->string('sms_from')->nullable();
            $table->string('active_template')->nullable();
            $table->text('mail_config')->nullable();
            $table->text('sms_config')->nullable();
            $table->text('global_shortcodes')->nullable();
            $table->integer('en')->nullable()->default(0);
            $table->integer('sn')->nullable()->default(0);
            $table->integer('agree')->nullable()->default(0);
            $table->text('system_info')->nullable();
           

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
        Schema::dropIfExists('general_settings');
    }
};
