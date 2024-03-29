<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Films extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
	            $table->increments('id');
                    $table->string('name', 50);
                    $table->smallInteger('year');
                    $table->text('descript');
                    $table->smallInteger('lasting');
                    $table->smallInteger('bowsing');
                    $table->string('img', 30);
                    $table->text('url');// def NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
