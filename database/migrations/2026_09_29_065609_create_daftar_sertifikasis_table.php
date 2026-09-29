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
        Schema::create('daftar_sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ListSertifikasi')->constrained()->cascadeOnDelete();
            $table->string('NamaSertifikasi');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_sertifikasis');
    }
};
