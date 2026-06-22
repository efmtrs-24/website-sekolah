public function up(): void
{
    Schema::create('gurus', function (Blueprint $table) {

        $table->id();

        $table->string('nama');
        $table->string('jk');
        $table->string('tempat');
        $table->string('tgl_lahir');

        $table->string('jabatan');
        $table->string('tmt');

        $table->string('ijazah');
        $table->string('jurusan');
        $table->string('tahun');

        $table->string('perguruan_tinggi')->nullable();

        $table->string('bidang_studi');
        $table->string('alamat');
        $table->string('status');

        $table->timestamps();

    });
}