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
        Schema::table('pendidikan', function (Blueprint $table) {
            $table->foreign('biodata')->references('id')->on('biodata')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('pekerjaan', function (Blueprint $table) {
            $table->foreign('biodata')->references('id')->on('biodata')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('pelatihan', function (Blueprint $table) {
            $table->foreign('biodata')->references('id')->on('biodata')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
