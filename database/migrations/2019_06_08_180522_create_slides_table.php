<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('slides', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->string('title');
            $table->text('content');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('section_id');
            $table->timestamps();

            $table->foreign('section_id')
                ->references('id')
                ->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
