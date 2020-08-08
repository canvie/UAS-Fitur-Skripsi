<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjapraktek', function (Blueprint $table) {
            $table->string('id', 15)->primary();
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->string('judul_kp');
            $table->string('tempat_penelitian');
            $table->string('alamat');
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
        Schema::dropIfExists('kerjapraktek');
    }
}
