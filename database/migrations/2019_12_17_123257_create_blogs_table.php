<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('browser_title');
            $table->string('blog_title');
            $table->string('permalink');
            $table->string('embedded_video');
            $table->string('blog_details');
            $table->integer('category');
            $table->integer('blog_poster');
            $table->integer('featured_image');
            $table->string('seo_keyword');
            $table->string('seo_description');
            $table->string('imageAltText');
            $table->string('imageTitleText');
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
        Schema::dropIfExists('blogs');
    }
}
