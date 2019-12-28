<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name')->nullable();
            $table->text('ShortBrief')->nullable();
            $table->text('Details')->nullable();
            $table->integer('image1')->nullable();
            $table->integer('image2')->nullable();
            $table->string('imageAltText')->nullable();
            $table->string('imageTitleText')->nullable();
            $table->string('Discover_link')->nullable();
            $table->string('Download_link')->nullable();
            $table->string('Email1')->nullable();
            $table->string('Email2')->nullable();
            $table->string('Phone1')->nullable();
            $table->string('Phone2')->nullable();
            $table->string('Address')->nullable();
            $table->string('Facebook_Link')->nullable();
            $table->string('Youtube_Link')->nullable();
            $table->string('Twitter_Link')->nullable();
            $table->string('Linkedin_Link')->nullable();
            $table->string('Fiveer_Link')->nullable();
            $table->string('Upwork_Link')->nullable();
            $table->string('Instagram_Link')->nullable();
            $table->string('Pinterest_Link')->nullable();
            $table->string('Behance_Link')->nullable();
            $table->string('Dribble_Link')->nullable();
            $table->string('Vimeo_Link')->nullable();
            $table->string('Github_Link')->nullable();
            $table->string('Google_Map')->nullable();
            $table->string('stackoverflow_link')->nullable();
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
        Schema::dropIfExists('about_profiles');
    }
}
