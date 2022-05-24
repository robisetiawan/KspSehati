<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJaminansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaminans', function (Blueprint $table) {
            $table->id();
            $table->string('ada_jaminan')->nullable();
            $table->string('buss_unit')->nullable();
            $table->string('no_polisi')->nullable();
            $table->string('no_mesin')->nullable();
            $table->string('kepemilikan')->nullable();
            $table->string('barang')->nullable();
            $table->string('tipe')->nullable();
            $table->string('tahun')->nullable();
            $table->string('awalorakhir')->nullable();
            $table->string('harga_pasar')->nullable();
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
        Schema::dropIfExists('jaminans');
    }
}
