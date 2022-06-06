<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id');
            $table->foreignId('jaminan_id');
            $table->foreignId('barang_id');
            $table->foreignId('las_id');
            $table->foreignId('kondisi_unit_id');
            $table->foreignId('pinjam_id');
            $table->foreignId('history_id');
            $table->string('no_order')->unique();
            $table->enum('keperluan', ['Sendiri', 'Keluarga', 'Orang Lain'])->nullable();
            $table->text('catatan')->nullable();
            $table->text('catt_survey')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
