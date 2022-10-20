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
        Schema::create('don_hang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_khach_hang')->unsigned();
            $table->string('ho_ten');
            $table->string('dia_chi');
            $table->string('email');
            $table->string('ghi_chu');
            $table->enum('trang_thai',[0,1,2,3])->comment('0 là chờ xử lí, 1 là đang xử lí, 2 là thành công, 3 là thất bại')->default(0);
            $table->timestamps();
        });
        Schema::table('don_hang', function ($table) {
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
