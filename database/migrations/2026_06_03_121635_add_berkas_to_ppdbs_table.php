<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ppdbs', function (Blueprint $table) {
            $table->string('foto')->nullable();
            $table->string('akta')->nullable();
            $table->string('kk')->nullable();
            $table->string('ijazah')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('ppdbs', function (Blueprint $table) {
            $table->dropColumn([
                'foto',
                'akta',
                'kk',
                'ijazah'
            ]);
        });
    }
};