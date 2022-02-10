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
            $table->string('no')->nullable();
            $table->date('tgl_faktur')->nullable();
            $table->date('tgl_jatuhtempo')->nullable();
            $table->string('nama_penerima')->nullable();
            $table->string('alamat_penerima')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('NPWP')->nullable();
            $table->string('diskon')->nullable();
            $table->integer('total')->nullable();
            $table->json('produk')->nullable();
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
