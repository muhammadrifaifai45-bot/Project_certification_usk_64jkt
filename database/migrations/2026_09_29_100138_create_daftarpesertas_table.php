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
        Schema::create('daftarpesertas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('certification_list_id')->constrained()->cascadeOnDelete;
            $table->string('nama_peserta');
            $table->string('nik');
            $table->enum('gender',['perempuan','pria']);
            $table->text('alamat');
            $table->string('surat_image')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftarpesertas');
    }
};
