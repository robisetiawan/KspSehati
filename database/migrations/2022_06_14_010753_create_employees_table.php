<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->int('bawa_ag')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_employee')->nullable();
            $table->string('no_identitas')->nullable();
            $table->string('tmpt_lhr')->nullable();
            $table->date('tgl_lhr')->nullable();
            $table->char('no_tel', 12)->nullable();
            $table->string('image')->nullable();
            $table->string('alamat')->nullable();
            $table->char('rt', 3);
            $table->char('rw', 3);
            $table->string('desa_kel');
            $table->string('kec');
            $table->string('kab_kota');
            $table->string('provinsi');
            $table->char('kode_pos')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
