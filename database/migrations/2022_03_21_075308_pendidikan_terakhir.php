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
        Schema::create('pendidikan',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('biodata');
            $table->string("jenjang_pendidikan");
            $table->string("institute_name");
            $table->string("prodi");
            $table->integer("tahun_lulus");
            $table->double("ipk");
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
        //
    }
};
