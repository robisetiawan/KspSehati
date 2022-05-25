<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('las', function (Blueprint $table) {
            $table->id();
            $table->string('sewa_rumah')->nullable();
            $table->enum('per', ['Bulan', 'Tahun'])->nullable();
            $table->enum('mobil', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('kulkas', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('ac', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('furniture', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('motor', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('tv', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('dvd', ['Ada', 'Tidak Ada'])->nullable();
            $table->string('jarak_rk')->nullable();
            $table->enum('rumah', ['Semi Permanen', 'Tidak Ada'])->nullable();
            $table->enum('tetangga_kanan', ['Lebih dari 5 rumah', 'Kurang dari 5 rumah'])->nullable();
            $table->enum('tetangga_kiri', ['Lebih dari 5 rumah', 'Kurang dari 5 rumah'])->nullable();
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
        Schema::dropIfExists('las');
    }
}
