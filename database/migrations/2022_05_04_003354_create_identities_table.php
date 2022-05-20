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
            $table->enum('type_identitas', ['KTP', 'KK']);
            $table->char('no_identitas', 16);
            $table->enum('warganegara', ['WNI', 'WNA']);
            $table->enum('agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu']);
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA/SMK', 'Diploma', 'Sarjana', 'Megister', 'Spesialis', 'Doktor']);
            $table->string('gelar')->nullable();
            $table->enum('status_kawin', ['Kawin', 'Belum Kawin']);
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->enum('status_rumah', ['Rumah Sendiri', 'Rumah Orang tua', 'Kontrakan', 'Sewa']);
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
