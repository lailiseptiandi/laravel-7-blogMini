<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_artikel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->text('body');
            $table->text('gambar');
            $table->unsignedBigInteger('categories_id');

            $table->foreign('categories_id')->references('id')->on('table_categories')->onDelete('cascade');
            
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
        Schema::dropIfExists('table_artikel');
    }
}
