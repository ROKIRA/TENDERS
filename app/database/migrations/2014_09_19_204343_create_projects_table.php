<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function($table){
            $table->increments('project_id');
            $table->string('project_alias', 255);
            $table->string('project_keywords_ru', 200);
            $table->string('project_keywords_en', 200);
            $table->string('project_keywords_ua', 200);
            $table->string('project_description_ru', 255);
            $table->string('project_description_en', 255);
            $table->string('project_description_ua', 255);
            $table->string('project_name_ru', 100);
            $table->string('project_name_en', 100);
            $table->string('project_name_ua', 100);
            $table->string('project_text_ru', 1000);
            $table->string('project_text_en', 1000);
            $table->string('project_text_ua', 1000);
            $table->string('project_image_preview');
            $table->string('project_image');
            $table->string('project_link_to_site');
            $table->dateTime('project_date_start');
            $table->dateTime('project_date_stop');
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
		Schema::drop('projects');
	}

}
