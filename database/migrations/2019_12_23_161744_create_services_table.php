<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_title');
            $table->string('BrowserTitle');
            $table->string('permalink');
            $table->integer('featured_image');
            $table->integer('ServiceIcon');
            $table->text('SeoKeyword')->nullable();
            $table->text('SeoDescription')->nullable();
            $table->string('FeaturedImageAltText')->nullable();
            $table->string('FeaturedImageTitleText')->nullable();
            $table->text('MainContent');
            $table->text('OpenContent');
            $table->integer('Active_Status')->default('0');;
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
        Schema::dropIfExists('services');
    }
}
