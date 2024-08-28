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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eskul_id')->constrained();
            $table->foreignId('event_id')->constrained();
            $table->enum('status', ['Hadir', 'Izin', 'Sakit', 'Tanpa Keterangan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('presensis', function (Blueprint $table) {
            $table->dropForeign(['eskul_id']);
            $table->dropForeign(['event_id']);
        });
        Schema::dropIfExists('presensis');
    }
};
