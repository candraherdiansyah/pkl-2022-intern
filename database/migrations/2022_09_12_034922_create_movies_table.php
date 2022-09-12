<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('sinopsis');
            $table->string('background');
            $table->string('cover');
            $table->bigInteger('id_tahun_rilis')->unsigned();
            $table->bigInteger('id_durasi_film')->unsigned();
            // relasi
            // fk id_tahun_rilis
            $table->foreign('id_tahun_rilis')->references('id')
                ->on('tahun_rilis');
            $table->foreign('id_durasi_film')->references('id')
                ->on('durasi_films');
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
        Schema::dropIfExists('movies');
    }
};
