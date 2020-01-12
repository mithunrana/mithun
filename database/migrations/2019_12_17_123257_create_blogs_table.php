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
            $table->string('video_url');
            $table->text('embedded_video');
            $table->longText('blog_details');
            $table->integer('category')->nullable();
            $table->integer('blog_poster');
            $table->integer('featured_image');
            $table->text('seo_keyword')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('imageAltText')->nullable();
            $table->string('imageTitleText')->nullable();
            $table->integer('Active_Status')->default('0');
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
