<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrinhDoCanBosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trinh_do_can_bos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('trinh_do_id');
            $table->foreign('trinh_do_id')
            ->references('id')->on('trinh_dos')
            ->onDelete('cascade');
            $table->unsignedInteger('nhan_su_id');
            $table->foreign('nhan_su_id')
            ->references('id')->on('nhan_sus')
            ->onDelete('cascade');
            $table->date('ngay_chung_nhan');
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
        Schema::dropIfExists('trinh_do_can_bos');
    }
}
