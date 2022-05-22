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
            $table->string('bpkb')->nullable();
            $table->string('stnk_ada?')->nullable();
            $table->string('faktur')->nullable();
            $table->string('jatuh_tempo_stnk')->nullable();
            $table->string('surat_jual_beli?')->nullable();
            $table->string('stnk_mati_tahun?')->nullable();
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
