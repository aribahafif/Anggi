<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasispengetahuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basispengetahuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode',255)->nullable();
            $table->float('mb')->unsigned();
            $table->float('md')->unsigned();
            $table->bigInteger('id_gejala')->unsigned();
            $table->foreign('id_gejala')->references('id')->on('gejala')->onDelete('cascade');
            $table->bigInteger('id_penyakit')->unsigned();
            $table->foreign('id_penyakit')->references('id')->on('penyakit')->onDelete('cascade');
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
        Schema::dropIfExists('basispengetahuan');
    }
}
