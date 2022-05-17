<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professions', function (Blueprint $table) {
            $table->id();
            $table->string('pekerjaan');
            $table->char('lama_kerja_tahun', 2);
            $table->char('lama_kerja_bulan', 2);
            $table->char('tanggungan', 2);
            $table->integer('omset_dagang')->nullable();
            $table->integer('pendapatan')->nullable();
            $table->integer('gaji')->nullable();
            $table->integer('pendapatan_psg')->nullable();
            $table->integer('pendapatan_lain')->nullable();
            $table->integer('biaya_bulanan')->nullable();
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
        Schema::dropIfExists('professions');
    }
}
