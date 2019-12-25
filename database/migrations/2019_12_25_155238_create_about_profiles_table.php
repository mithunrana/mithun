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
            $table->string('Name');
            $table->text('ShortBrief');
            $table->text('Details');
            $table->string('Discover_link');
            $table->string('Download_link');
            $table->string('Email1');
            $table->string('Phone1');
            $table->string('Phone2');
            $table->string('Email2');
            $table->string('Address');
            $table->string('Facebook_Link');
            $table->string('Youtube_Link');
            $table->string('Twitter_Link');
            $table->string('Linkedin_Link');
            $table->string('Fiveer_Link');
            $table->string('Upwork_Link');
            $table->string('Instagram_Link');
            $table->string('Pinterest_Link');
            $table->string('Behance_Link');
            $table->string('Dribble_Link');
            $table->string('Vimeo_Link');
            $table->string('Github_Link');
            $table->string('Google_Map');
            $table->string('stackoverflow_link');
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
