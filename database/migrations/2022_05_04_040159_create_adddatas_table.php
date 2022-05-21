<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdddatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adddatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('alamat_add')->nullable();
            $table->char('rt_add', 3)->nullable();
            $table->char('rw_add', 3)->nullable();
            $table->string('desa_kel_add')->nullable();
            $table->string('kec_add')->nullable();
            $table->string('kab_kota_add')->nullable();
            $table->string('provinsi_add')->nullable();
            $table->char('kode_pos_add')->nullable();
            $table->char('telepon_rumah_add', 12)->nullable();
            $table->char('telepon_seluler_add', 12)->nullable();
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
        Schema::dropIfExists('adddatas');
    }
}
