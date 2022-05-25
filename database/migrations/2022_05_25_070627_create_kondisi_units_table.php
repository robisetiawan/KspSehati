<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKondisiUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_units', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori_m', ['Baik', 'Tidak Ada'])->nullable();
            $table->enum('suara_m', ['Halus', 'Tidak Ada'])->nullable();
            $table->enum('sayap_b', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('cover_b', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('knalpot', ['Orisinil', 'Tidak Ada'])->nullable();
            $table->enum('accu_aki', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('cakram', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('speedometer', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('kick_s', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('velg_ban', ['Standar', 'Tidak Ada'])->nullable();
            $table->enum('shockbreaker', ['Standar', 'Tidak Ada'])->nullable();
            $table->enum('spion', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('kaki', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('jok', ['Orisinil', 'Tidak Ada'])->nullable();
            $table->enum('lampu_sign', ['Ada', 'Tidak Ada'])->nullable();
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
        Schema::dropIfExists('kondisi_units');
    }
}
