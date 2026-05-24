<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            // LOGIN USERNAME
            $table->string('username')->unique();

            // PASSWORD
            $table->string('password');

            // ROLE USER
            $table->enum('role', [
                'admin',
                'petugas',
                'peminjam'
            ])->default('peminjam');

            // DATA TAMBAHAN
            $table->string('nim')->nullable();

            $table->string('no_hp')->nullable();

            $table->text('alamat')->nullable();

            $table->rememberToken();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};