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
        Schema::create('events', function (Blueprint $table) {
            $table->id('id_event');
            $table->string('nama_event');
            $table->enum('jenis_event', ['Workshop','Seminar']);
            $table->string('deskripsi_event')->nullable();
            $table->date('tanggal_event');
            $table->string('image_event')->nullable();
            $table->string('penyelenggara_event')->nullable();
            $table->string('kapasitas_peserta')->nullable();
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
        Schema::dropIfExists('events');
    }
};
