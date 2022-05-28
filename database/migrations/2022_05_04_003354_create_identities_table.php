<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->enum('type_identitas', ['KTP', 'SIM', 'Domisili']);
            $table->char('no_identitas');
            $table->enum('warganegara', ['WNI', 'WNA']);
            $table->enum('agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu']);
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA/SMK', 'Diploma 1', 'Diploma 2', 'Diploma 3', 'Diploma 4', 'Sarjana S1', 'Megister', 'Doktor']);
            $table->string('gelar')->nullable();
            $table->enum('status_kawin', ['Kawin', 'Belum Kawin', 'Cerai']);
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->enum('status_rumah', ['Rumah Sendiri', 'Rumah Orang tua', 'Rumah Dinas', 'Rumah Sewa/Kontrak', 'Kost', 'Rumah Status Kredit', 'Rumah Keluarga']);
            $table->string('alamat');
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
        Schema::dropIfExists('identities');
    }
}
