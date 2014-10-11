<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaderships extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('leaderships', function($table) {
            $table->increments('lead_id');
            $table->string('lead_post_ru', 100);
            $table->string('lead_post_en', 100);
            $table->string('lead_post_ua', 100);
            $table->string('lead_fio_ru', 100);
            $table->string('lead_fio_en', 100);
            $table->string('lead_fio_ua', 100);
            $table->string('lead_text_ru', 1000);
            $table->string('lead_text_en', 1000);
            $table->string('lead_text_ua', 1000);
            $table->string('lead_photo', 150);
            $table->string('lead_email', 30);
            $table->string('lead_phone', 15);
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
        Schema::drop('leaderships');
	}

}
