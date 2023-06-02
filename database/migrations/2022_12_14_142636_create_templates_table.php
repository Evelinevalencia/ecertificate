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
        Schema::create('templates', function (Blueprint $table) {
            $table->id('id_template');
            $table->string('nama_template');
            $table->string('image_template');
            $table->string('x_nama');
            $table->string('y_nama');
            $table->enum('font_Style', ['ChocolateRaindrops', 'OpenSans-Bold', 'OpenSans-BoldItalic', 'OpenSans-Light', 'QuinchoScript_PersonalUse']);
            $table->string('font_color');
            $table->string('x_nosertifikat');
            $table->string('y_nosertifikat');
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
        Schema::dropIfExists('templates');
    }
};
