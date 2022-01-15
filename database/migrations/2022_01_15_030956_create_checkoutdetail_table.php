<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkoutdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('varian_id')->nullabel();
            $table->unsignedBigInteger('user_id');
            $table->integer('qty')->unsign();
            $table->integer('total')->unsign();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('no action');
            $table->foreign('varian_id')->references('id')->on('varian')->onDelete('no action');
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
        Schema::dropIfExists('checkoutdetail');
    }
}
