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
            $table->enum('tipe_order', ['Retail', 'coming soon']);
            $table->enum('status', ['verify', 'coming soon']);
            $table->enum('platform', ['Konvensional', 'coming soon']);
            $table->enum('keperluan', ['Sendiri', 'coming soon']);
            $table->text('catatan');
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
