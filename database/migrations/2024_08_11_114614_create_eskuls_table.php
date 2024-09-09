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
        Schema::create('eskuls', function (Blueprint $table) {
            $table->id('id');
            $table->text('nama_eskul');
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eskuls', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
        });
        Schema::dropIfExists('eskuls');
    }
};
