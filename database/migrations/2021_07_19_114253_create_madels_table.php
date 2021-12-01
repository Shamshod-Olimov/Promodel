<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMadelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madels', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name_en')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('bust')->nullable();
            $table->integer('waist')->nullable();
            $table->integer('hips')->nullable();
            $table->integer('shoe')->nullable();
            $table->string('eyes_color')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('image')->nullable();
            $table->string('img_compcard')->nullable();
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
        Schema::dropIfExists('madels');
    }
}
