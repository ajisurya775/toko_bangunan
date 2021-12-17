<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang',100);
            $table->integer('stok')->unsign();
            $table->integer('harga')->unsign();
            $table->unsignedBigInteger('kategori_id');
            $table->text('deskripsi');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreignId('kategori_id')->constrained('kategoris')
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
