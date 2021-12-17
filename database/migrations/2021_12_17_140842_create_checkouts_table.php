<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keranjang_id');
            $table->unsignedBigInteger('user_id');
            $table->char('invoice',6);
            $table->unsignedBigInteger('desa_id');
            $table->text('deskripsi_alamat');
            $table->integer('subtot')->unsign();
            $table->char('hp',20);
            $table->char('bukti_pebayaran',100);
            $table->integer('jumlah_bayar')->unsign();
            $table->enum('status',['0','1','2','3']);
            $table->timestamps();
            $table->SoftDeletes();

            $table->foreign('keranjang_id')->references('id')->on('keranjang')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
