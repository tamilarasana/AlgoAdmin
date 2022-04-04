<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatuslogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuslogs', function (Blueprint $table) {
            $table->id();
            $table->string('basketname')->nullable();
            $table->bigInteger('tokenId');
            $table->string('tokenName');
            $table->integer('qtyPerExe');
            $table->float('SqTarget',14,5);
            $table->float('StLoss',14,5);
            $table->float('lossSqr',14,5);
            $table->string('sqst');
            $table->float('sqrdPrice',14,5);
            $table->integer('sqrdSignal');
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('statuslogs');
    }
}
