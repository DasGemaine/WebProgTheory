<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGhostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghosts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('countryID')->references('id')->on('countries');
            $table->string('ghost_image');
            $table->text('thumbnail_text');
            $table->text('information');
            $table->text('how to fight');
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
        Schema::dropIfExists('ghosts');
    }
}
