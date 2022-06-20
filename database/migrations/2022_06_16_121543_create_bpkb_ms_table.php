<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpkbMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpkb_ms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bpkbk_id')->nullable();
            $table->foreignId('order_id')->nullable();
            $table->string('penyerah')->nullable();
            $table->string('dtrm_olh')->nullable();
            $table->string('foto')->nullable();
            $table->string('status')->nullable();
            $table->string('no_memo')->nullable();
            $table->string('no_bpkb')->nullable();
            $table->string('nm_bpkb')->nullable();
            $table->string('almt_bpkb')->nullable();
            $table->string('no_rangka')->nullable();
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
        Schema::dropIfExists('bpkb_ms');
    }
}
