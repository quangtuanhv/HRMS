<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChucVuCanBosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuc_vu_can_bos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('chuc_vu_id');
            $table->foreign('chuc_vu_id')
            ->references('id')->on('chuc_vus')
            ->onDelete('cascade');
            $table->unsignedInteger('nhan_su_id');
            $table->foreign('nhan_su_id')
            ->references('id')->on('nhan_sus')
            ->onDelete('cascade');
            $table->date('ngay_nhan_chuc');
            $table->string('trang_thai');
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
        Schema::dropIfExists('chuc_vu_can_bos');
    }
}
