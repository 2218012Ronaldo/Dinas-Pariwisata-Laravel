<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketWisataTable extends Migration
{
    public function up()
    {
        Schema::create('paket_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('informasi_destinasi');
            $table->string('detail_paket_wisata');
            $table->text('deskripsi_paket');
            $table->date('jadwal');
            $table->text('persyaratan_ketentuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paket_wisata');
    }
}

