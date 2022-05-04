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
            $table->string('nama');
            $table->string('alamat');
            $table->char('rt', 3);
            $table->char('rw', 3);
            $table->string('desa_kel');
            $table->string('kec');
            $table->string('kab_kota');
            $table->string('provinsi');
            $table->char('kode_pos');
            $table->char('telepon_rumah', 12);
            $table->char('telepon_seluler', 12);
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
