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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_loai')->unsigned();
            $table->string('ten_san_pham');
            $table->bigInteger('don_gia')->unsigned();
            $table->bigInteger('giam_gia')->unsigned();
            $table->string('hinh');
            $table->bigInteger('luot_xem')->unsigned();
            $table->bigInteger('luot_ban')->unsigned();
            $table->text('mo_ta');
            $table->enum('trang_thai',[0,1])->comment('0 là bình thường, 1 là ẩn')->default(0);
            $table->timestamps();
        });
        Schema::table('san_pham', function ($table) {
            $table->foreign('ma_loai')->references('id')->on('loai');
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
