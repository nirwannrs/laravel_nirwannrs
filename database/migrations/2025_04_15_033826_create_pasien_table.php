<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->text('alamat');
            $table->string('no_telpon');
            $table->unsignedBigInteger('id_rs');
            $table->timestamps();

            // Relasi ke tabel Rumah Sakit
            $table->foreign('id_rs')
                ->references('id')
                ->on('rumah_sakit')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
