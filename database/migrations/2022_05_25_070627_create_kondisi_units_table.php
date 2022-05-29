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
            $table->enum('kategori_m', ['Baik', 'Tidak Baik'])->nullable();
            $table->enum('suara_m', ['Halus', 'Tidak Halus'])->nullable();
            $table->enum('sayap_b', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('cover_b', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('knalpot', ['Orisinil', 'Tidak Orisinil'])->nullable();
            $table->enum('accu_aki', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('cakram', ['Ada/Model Tidak Bercakram', 'Tidak Ada'])->nullable();
            $table->enum('speedometer', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('kick_s', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('velg_ban', ['Standar', 'Tidak Standar'])->nullable();
            $table->enum('shockbreaker', ['Standar', 'Tidak Standar'])->nullable();
            $table->enum('spion', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('kaki', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('jok', ['Orisinil', 'Tidak Orisinil'])->nullable();
            $table->enum('lampu_sign', ['Ada', 'Tidak Ada'])->nullable();
            $table->integer('m_kend')->nullable();
            $table->integer('a_man')->nullable();
            $table->integer('a_opt')->nullable();
            $table->integer('grade_desc')->nullable();
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
