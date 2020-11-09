<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivots', function (Blueprint $table) {
            $table->id();
            //  $table->integer('user_id')->unsigned();
            //  $table->integer('book_id')->unsigned();

             $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreignId('book_id')->references('id')->on('books')->onDelete('cascade');
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
        Schema::dropIfExists('pivots');
    }
}
