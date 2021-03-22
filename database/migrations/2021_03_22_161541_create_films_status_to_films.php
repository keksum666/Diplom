<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsStatusToFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films_status_to_films', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('film_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('status_id');
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
        Schema::dropIfExists('films_status_to_films');
    }
}
