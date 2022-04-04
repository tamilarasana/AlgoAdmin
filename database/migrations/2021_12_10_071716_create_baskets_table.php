<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('basket_id')->unsigned();
            $table->string('basketname')->nullable();
            $table->bigInteger('tokenId')->nullable();
            $table->string('tokenName')->nullable();
            $table->integer('qtyPerExe')->nullable();
            $table->float('SqTarget',14,5)->nullable();
            $table->float('StLoss',14,5)->nullable();
            $table->float('lossSqr',14,5)->nullable();
            $table->string('sqst')->nullable();
            $table->float('sqrdPrice',14,5)->nullable();
            $table->integer('sqrdSignal')->nullable();
            $table->float('ticket_price',14,5)->nullable();
            $table->float('ttl_tk_price',14,5)->nullable();
            $table->float('margin_price',14,5)->nullable();
            $table->integer('status')->default('0')->nullable();
            $table->timestamps();
            $table->foreign('basket_id')->references('id')->on('basket_cats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baskets');
    }
}
