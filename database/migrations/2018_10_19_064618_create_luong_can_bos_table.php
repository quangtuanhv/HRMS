<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuongCanBosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luong_can_bos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhan_su_id');
            $table->foreign('nhan_su_id')
            ->references('id')->on('nhan_sus')
            ->onDelete('cascade');
            $table->unsignedInteger('luong_co_ban_id');
            $table->foreign('luong_co_ban_id')
            ->references('id')->on('luong_co_bans')
            ->onDelete('cascade');
            $table->unsignedInteger('he_so_luong_id');
            $table->foreign('he_so_luong_id')
            ->references('id')->on('he_so_luongs')
            ->onDelete('cascade');
            $table->date('ngay');
            $table->string('ap_dung');
            $table->string('tongluong');
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
        Schema::dropIfExists('luong_can_bos');
    }
}
