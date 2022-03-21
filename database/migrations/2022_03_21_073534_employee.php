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
        Schema::create("biodata",function(Blueprint $table){
            $table->id();
            $table->string("position");
            $table->string("name");
            $table->string("ktp");
            $table->string("place_birth_day");
            $table->string("gender");
            $table->string("religion");
            $table->string("blood_type");
            $table->string("status");
            $table->string("address");
            $table->string("email");
            $table->string("no_telp");
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
