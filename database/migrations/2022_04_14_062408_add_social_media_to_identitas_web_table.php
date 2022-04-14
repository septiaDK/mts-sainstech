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
        Schema::table('identitas_web', function (Blueprint $table) {
            $table->string('link_instagram')->nullable();
            $table->string('link_telegram')->nullable();
            $table->string('link_facebook')->nullable();
            $table->text('logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('identitas_web', function (Blueprint $table) {
            //
        });
    }
};
