<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengembalians', function (Blueprint $table) {

            $table->id();

            $table->foreignId('peminjaman_id')
                ->constrained('peminjamans')
                ->onDelete('cascade');

            $table->date('tanggal_dikembalikan');

            $table->enum('kondisi', [
                'baik',
                'rusak',
                'hilang'
            ])->default('baik');

            $table->decimal('denda', 10, 2)->default(0);

            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};