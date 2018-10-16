<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhAnhNhanSusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh_nhan_sus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hinh_anh');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
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
        Schema::dropIfExists('hinh_anh_nhan_sus');
    }
}
