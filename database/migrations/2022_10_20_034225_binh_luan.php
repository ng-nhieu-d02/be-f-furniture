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
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_san_pham')->unsigned();
            $table->bigInteger('ma_khach_hang')->unsigned();
            $table->text('noi_dung');
            $table->enum('trang_thai',[0,1])->comment('0 là bình thường, 1 là ẩn')->default(0);
            $table->timestamps();
        });
        Schema::table('binh_luan', function ($table) {
            $table->foreign('ma_san_pham')->references('id')->on('san_pham');
            $table->foreign('ma_khach_hang')->references('id')->on('khach_hang');
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
