public function up(): void
{
    Schema::create('ppdbs', function (Blueprint $table) {

        $table->id();

        $table->string('nama');

        $table->string('nisn')->unique();

        $table->string('jenis_kelamin');

        $table->string('tempat_lahir');

        $table->date('tanggal_lahir');

        $table->text('alamat');

        $table->string('asal_sekolah');

        $table->string('nama_ayah');

        $table->string('nama_ibu');

        $table->string('no_hp');

        $table->enum('status', [
            'Menunggu',
            'Diterima',
            'Ditolak'
        ])->default('Menunggu');

        $table->timestamps();

    });
}