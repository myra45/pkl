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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('eskul_id')->constrained('eskuls')->onDelete('cascade');
            $table->date('tanggal');
            $table->text('judul_tugas');
            $table->text('deskripsi');
            $table->text('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tugas', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
            $table->dropForeign(['eskul_id']);
        });
        Schema::dropIfExists('tugas');
    }
};
