<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHopDongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_dongs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhan_su_id');
            $table->foreign('nhan_su_id')
            ->references('id')->on('nhan_sus')
            ->onDelete('cascade');
            $table->unsignedInteger('loai_hop_dong_id');
            $table->foreign('loai_hop_dong_id')
            ->references('id')->on('loai_hop_dongs')
            ->onDelete('cascade');
            $table->date('ngay_ky');
            $table->text('ghi_chu')->nullable();
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
        Schema::dropIfExists('hop_dongs');
    }
}
