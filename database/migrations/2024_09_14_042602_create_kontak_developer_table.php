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
        Schema::create('kontak_developer', function (Blueprint $table) {
            $table->id();
            $table->text('photo_developer');
            $table->text('nama_developer');
            $table->text('kelas_developer');
            $table->text('wa_developer');
            $table->text('ig_developer');
            $table->text('email_developer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontak_developer');
    }
};
