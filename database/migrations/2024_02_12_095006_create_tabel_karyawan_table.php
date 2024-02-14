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
        Schema::create('tabel_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('identification');
            $table->enum('jenisKelamin', ['L','P']);
            $table->text('alamat');
            $table->string('telp');
            $table->integer('usia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_karyawan');
    }
};
