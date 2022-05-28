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
            $table->enum('ada_jaminan', ['Ada Jaminan', 'Tanpa Jaminan'])->nullable();
            $table->enum('buss_unit', ['01 - Pinjaman Jaminan Motor', '02 - Pinjaman Jaminan Mobil'])->nullable();
            $table->string('no_polisi')->nullable();
            $table->string('no_mesin')->nullable();
            $table->enum('kepemilikan', ['Milik Sendiri', 'Milik Suami', 'Milik Istri', 'Milik Keluarga', 'Milik Orang Lain'])->nullable();
            $table->string('barang')->nullable();
            $table->string('tipe')->nullable();
            $table->string('tahun')->nullable();
            $table->enum('awalorakhir', ['Awal', 'Akhir'])->nullable();
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
