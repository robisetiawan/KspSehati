<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaanUangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan_uangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->string('no_terima');
            $table->string('trm_dr')->nullable();
            $table->enum('cr_bayar', ['Tunai', 'Transfer'])->nullable();
            $table->string('kd_bank')->nullable();
            $table->string('no_rek')->nullable();
            $table->integer('nominal')->nullable();
            $table->integer('angsuran_ke')->nullable();
            $table->integer('sisa_pj')->nullable();
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
        Schema::dropIfExists('penerimaan_uangs');
    }
}
