<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLingkungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lingkungans', function (Blueprint $table) {
            $table->id();
            $table->string('wrg_a1')->nullable();
            $table->string('wrg_a2')->nullable();
            $table->string('wrg_a3')->nullable();
            $table->string('pkm1')->nullable();
            $table->string('pkm2')->nullable();
            $table->string('pkm3')->nullable();
            $table->string('rdl1')->nullable();
            $table->string('rdl2')->nullable();
            $table->string('rdl3')->nullable();
            $table->string('nm_nr1')->nullable();
            $table->string('nm_nr2')->nullable();
            $table->string('nm_nr3')->nullable();
            $table->string('tlp_nr1')->nullable();
            $table->string('tlp_nr2')->nullable();
            $table->string('tlp_nr3')->nullable();
            $table->string('hbng1')->nullable();
            $table->string('hbng2')->nullable();
            $table->string('hbng3')->nullable();
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
        Schema::dropIfExists('lingkungans');
    }
}
