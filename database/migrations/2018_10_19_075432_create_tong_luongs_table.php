<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTongLuongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tong_luongs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('luong_thang');
            $table->string('tien_tro_cap')->nullable();
            $table->text('noi_dung_tro_cap')->nullable();
            $table->string('tong_luong');
            $table->text('ghi_chu')->nullable();
            $table->unsignedInteger('nhan_su_id');
            $table->foreign('nhan_su_id')
            ->references('id')->on('nhan_sus')
            ->onDelete('cascade');
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
        Schema::dropIfExists('tong_luongs');
    }
}
