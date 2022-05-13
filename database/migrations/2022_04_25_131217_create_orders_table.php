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
            $table->enum('tipe_order', ['Retail', 'coming soon'])->nullable();
            $table->enum('status', ['verify', 'coming soon']);
            $table->enum('platform', ['Konvensional', 'coming soon'])->nullable();
            $table->enum('keperluan', ['Sendiri', 'coming soon'])->nullable();
            $table->text('catatan')->nullable();
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
