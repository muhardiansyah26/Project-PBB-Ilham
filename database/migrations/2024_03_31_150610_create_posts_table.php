<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('NOP_SPPT');
            $table->string('NM_WP_SPPT');
            $table->string('JALAN_OP');
            $table->string('JLN_WP_SPPT');
            $table->string('NM_KELURAHAN');
            $table->string('NM_KECAMATAN');
            $table->string('THN_PAJAK_SPPT');
            $table->string('NILAI_SPPT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
