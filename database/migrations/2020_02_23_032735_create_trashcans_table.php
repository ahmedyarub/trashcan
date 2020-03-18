<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrashcansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trashcans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fill_level')->default(0);
            $table->string('longitude')->default(0);
            $table->string('latitude')->default(0);
            $table->integer('last_collection_delay')->default(0);
            $table->timestamp('last_collection_time')->useCurrent();
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
        Schema::dropIfExists('trashcans');
    }
}
