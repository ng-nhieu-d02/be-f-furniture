<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_don_hang')->unsigned();
            $table->bigInteger('ma_san_pham')->unsigned();
            $table->bigInteger('so_luong')->unsigned();
            $table->bigInteger('gia')->unsigned();
            $table->timestamps();
        });
        Schema::table('chi_tiet_don_hang', function ($table) {
            $table->foreign('ma_don_hang')->references('id')->on('don_hang');
            $table->foreign('ma_san_pham')->references('id')->on('san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
