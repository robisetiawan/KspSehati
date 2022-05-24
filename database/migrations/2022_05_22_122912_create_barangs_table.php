<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->enum('bpkb', ['Atas Nama Sendiri', 'Atas Nama Orang Lain'])->nullable();
            $table->enum('stnk_ada', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('faktur', ['Ada', 'Tidak Ada'])->nullable();
            $table->date('jatuh_tempo_stnk')->nullable();
            $table->enum('surat_jual_beli', ['Ada', 'Tidak Ada'])->nullable();
            $table->string('stnk_mati_tahun')->nullable();
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
        Schema::dropIfExists('barangs');
    }
}
