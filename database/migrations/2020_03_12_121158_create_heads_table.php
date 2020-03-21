<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tel');
            $table->string('email')->unique(); 
            $table->string('adress');
            $table->string('colorHead');
            $table->string('colorStyle');
            $table->string('colorNav');
            $table->string('colorStyleNav');
            $table->integer('fontSizeNav');
            $table->integer('fontSizeHead');
            $table->string('image');
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
        Schema::dropIfExists('heads');
    }
}
