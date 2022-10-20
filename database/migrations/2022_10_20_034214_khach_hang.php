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
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('email');
            $table->string('mat_khau');
            $table->enum('vai_tro',[0,1])->comment('0 là user, 1 là admin')->default(0);
            $table->enum('trang_thai',[0,1])->comment('0 là bình thường, 1 là ẩn')->default(0);
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
        //
    }
};
