<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->date('tgl_faktur');
            $table->date('tgl_jatuhtempo');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->string('nomor_hp');
            $table->string('NPWP');
            $table->string('diskon');
            $table->integer('total');
            $table->json('produk');
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
        Schema::dropIfExists('penjualan');
    }
}
