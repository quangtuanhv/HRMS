<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanSusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_sus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho');
            $table->string('ten');
            $table->string('dia_chi');
            $table->string('gioi_tinh');
            $table->string('email')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->unsignedInteger('bo_phan_id');
            $table->foreign('bo_phan_id')
            ->references('id')->on('bo_phans')
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
        Schema::dropIfExists('nhan_sus');
    }
}
