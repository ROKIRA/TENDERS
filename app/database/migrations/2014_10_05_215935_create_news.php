<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNews extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function($table) {
            $table->increments('news_id');
            $table->string('news_alias', 255);
            $table->string('news_keywords_ru', 200);
            $table->string('news_keywords_en', 200);
            $table->string('news_keywords_ua', 200);
            $table->string('news_description_ru', 255);
            $table->string('news_description_en', 255);
            $table->string('news_description_ua', 255);
            $table->string('news_title_ru', 100);
            $table->string('news_title_en', 100);
            $table->string('news_title_ua', 100);
            $table->string('news_text_ru', 1000);
            $table->string('news_text_en', 1000);
            $table->string('news_text_ua', 1000);
            $table->string('news_images', 255);
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
        Schema::drop('news');
    }

}