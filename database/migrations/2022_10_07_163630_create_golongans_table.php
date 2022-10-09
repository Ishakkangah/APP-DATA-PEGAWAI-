<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolongansTable extends Migration
{
    public function up()
    {
        Schema::create('golongans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_golongan');
            $table->unsignedBigInteger('gaji');
            $table->unsignedBigInteger('tunjangan_bulanan');
            $table->unsignedBigInteger('tunjangan_pulsa');
            $table->unsignedBigInteger('tunjangan_transportasi');
            $table->unsignedBigInteger('tunjangan_anak');
            $table->unsignedBigInteger('total_gaji');
            $table->string('masa_kerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('golongans');
    }
}
