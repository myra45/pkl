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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eskul_id')->constrained('eskuls')->onDelete('cascade')->nullable();
            $table->text('nama_event');
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->text('tempat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign(['eskul_id']);
        });
        Schema::dropIfExists('events');
    }
};
