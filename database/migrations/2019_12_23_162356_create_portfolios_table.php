<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Portfolio_title');
            $table->string('BrowserTitle');
            $table->string('permalink');
            $table->integer('category')->nullable();
            $table->integer('featured_image');
            $table->string('SeoKeyword')->nullable();
            $table->string('SeoDescription')->nullable();
            $table->string('FeaturedImageAltText')->nullable();
            $table->string('FeaturedImageTitleText')->nullable();
            $table->text('MainContent');
            $table->text('OpenContent');
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
        Schema::dropIfExists('portfolios');
    }
}
