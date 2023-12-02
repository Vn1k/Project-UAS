<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('supporters', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('email');
            $table->string('alamat',255);
            $table->string('no_telepon', 13);
            $table->enum('donasi', ['uang_tunai', 'barang']);
            $table->string('photo')->nullable();
            $table->date('tanggal');
            $table->string('pesan', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supporters');
    }
};
