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
        Schema::create('identitas_web', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('no_telpon');
            $table->string('email');
            $table->text('path_video');
            $table->text('deskripsi_video');
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
        Schema::dropIfExists('identitas_web');
    }
};
