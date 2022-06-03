<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->unique();
            $table->string('nilai_pinj')->nullable();
            $table->string('pk_kem')->nullable();
            $table->enum('tipe_angs', ['Tetap', 'Musiman'])->nullable();
            $table->string('jumlah_angs')->nullable();
            $table->string('periode')->nullable();
            $table->enum('per_p', ['Bulan', 'Tahun'])->nullable();
            $table->string('angsuran')->nullable();
            $table->string('admin_total')->nullable();
            $table->integer('harga_acuan')->nullable();
            $table->integer('bunga_margin')->nullable();
            $table->integer('pk_marg')->nullable();
            $table->integer('pinj_terakhir')->nullable();
            $table->integer('simp_kok')->nullable();
            $table->integer('nilai_terima')->nullable();
            $table->decimal('bunga', $precision = 8, $scale = 3)->nullable();
            $table->integer('persentase')->nullable();
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
        Schema::dropIfExists('pinjams');
    }
}
