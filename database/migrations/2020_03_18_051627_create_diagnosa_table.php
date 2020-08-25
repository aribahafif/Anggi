<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_riwayat')->unsigned();
            $table->foreign('id_riwayat')->references('id')->on('riwayat')->onDelete('cascade');
            $table->bigInteger('id_penyakit')->unsigned();
            $table->foreign('id_penyakit')->references('id')->on('penyakit')->onDelete('cascade');
            $table->double('cf', 8, 4);
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
        Schema::dropIfExists('diagnosa');
    }
}
