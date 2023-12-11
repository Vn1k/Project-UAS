<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan', 50);
            $table->string('penyelenggara', 50);
            $table->date('jadwal');
            $table->time('waktu');
            $table->string('cover')->nullable();
            $table->string('photo')->nullable();
            $table->string('deskripsi');
            $table->string('lokasi', 50)->nullable();
            $table->unsignedBigInteger('volunteer_id');
            $table->unsignedBigInteger('sponsor_id');
            $table->timestamps();
            $table->foreign('volunteer_id')->references('id')->on('volunteers')->onDelete('cascade');
            $table->foreign('sponsor_id')->references('id')->on('sponsors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kegiatans', function (Blueprint $table){
            $table->dropForeign(['volunteer_id']);
            $table->dropForeign(['sponsor_id']);
        });

        Schema::dropIfExists('kegiatans');
    }
};
