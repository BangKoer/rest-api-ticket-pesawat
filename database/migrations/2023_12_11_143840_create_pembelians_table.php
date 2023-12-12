<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\insertbobot.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\insertkriteria.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\insertmatrix.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\insertskala.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\layout-sidenav-light.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\layout-static.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\login.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\password.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\register.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\saw.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\tables.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\topsis.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\assets d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\css d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\js d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\401.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\404.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\500.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\charts.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\config.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\data_alternatif.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\data_alternatif_backup.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\data_bobot.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\data_kriteria.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\data_matrix.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\data_skala.php d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\indexbackup.html d:\DATA !IMPORTANT\Data Mahasiswa\Perkuliahan\Smstr 5\Prak.Sistem Informasi\Topsis_Penerapan_Lockdown\insertalternatif.php
     */
    public function up(): void
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tiket_id');
            $table->foreign('tiket_id')->references('id')->on('tiket_pesawats');
            $table->string('nama_pembeli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
