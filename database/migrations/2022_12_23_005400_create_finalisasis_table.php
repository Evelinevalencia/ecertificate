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
        Schema::create('finalisasis', function (Blueprint $table) {
            $table->id('id_finalisasi');
            $table->foreignId('id_peserta');
            $table->foreignId('id_event');
            $table->foreignId('id_template');
            $table->string('peran');
            $table->foreign('id_peserta')->references('id_peserta')->on('pesertas');
            $table->foreign('id_event')->references('id_event')->on('events');
            $table->foreign('id_template')->references('id_template')->on('templates');
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
        Schema::dropIfExists('finalisasis');
    }
};
