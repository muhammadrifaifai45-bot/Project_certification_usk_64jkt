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
        Schema::create('certification_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('daftarpeserta_id')->constrained()->cascadeOnDelete;
            $table->string('certification_code')->unique();
            $table->enum('status',['Antrian','Verifikasi','DataTerverifikasi'])->default('antrian');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certification_codes');
    }
};
