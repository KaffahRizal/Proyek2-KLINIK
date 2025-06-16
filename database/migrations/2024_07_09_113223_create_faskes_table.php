<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *  
     * 
     */
    public function up(): void
    {
        Schema::create('faskes', function (Blueprint $table) {
            $table->id();                          //1
            $table->string('nama', '100');          //2
            $table->string('nama_pengelola', '45'); //3
            $table->string('alamat', '100');        //4
            $table->string('website', '45');        //5
            $table->string('email', '45');          //6
            $table->foreignId('kabkota_id')->constrained('kabkota')->onDelete('cascade');         //7
            $table->integer('rating');             //8
            $table->string('latitude');            //9
            $table->string('longitude');           //10
            $table->foreignId('jenis_faskes_id')->constrained('jenis_faskes')->onDelete('cascade');    //11
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');        //12
            $table->timestamps();                  //13
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faskes');
    }
};
