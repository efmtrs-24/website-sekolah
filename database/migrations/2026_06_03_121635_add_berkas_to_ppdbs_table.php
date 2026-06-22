Schema::table('ppdbs', function (Blueprint $table) {

    $table->string('foto')->nullable();
    $table->string('akta')->nullable();
    $table->string('kk')->nullable();
    $table->string('ijazah')->nullable();

});