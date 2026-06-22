<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->enum('jk', ['L', 'P']);
            $table->string('tempat');
            $table->date('tgl_lahir');

            $table->string('jabatan');
            $table->date('tmt');

            $table->string('ijazah');
            $table->string('jurusan');
            $table->year('tahun');

            $table->string('perguruan_tinggi')->nullable();

            $table->string('bidang_studi');
            $table->text('alamat');
            $table->string('status');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};