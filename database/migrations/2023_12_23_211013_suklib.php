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
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('id_admin');
            $table->string('username_admin');
            $table->string('password_admin');
            $table->string('nama_admin');
            $table->string('jabatan_admin');
            $table->string('no_telp');
        });

        Schema::create('buku', function (Blueprint $table) {
            $table->integer('id_buku');
            $table->string('judul_buku');
            $table->date('tahun_terbit');
            $table->integer('id_pengarang');
            $table->integer('id_penerbit');
            $table->integer('jumlah_halaman');
            $table->string('isbn');
            $table->integer('id_rak');
            $table->integer('stok_buku');
            $table->integer('id_genre');
            $table->integer('poin_buku');
        });

        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->integer('id_detail_pinjam');
            $table->integer('id_pinjam');
            $table->integer('id_buku');
            $table->string('judul_buku');
            $table->string('kondisi_buku');
        });

        Schema::create('detail_pengembalian', function (Blueprint $table) {
            $table->integer('id_detail_pengembalian');
            $table->integer('id_pengembalian');
            $table->integer('id_buku');
            $table->string('judul_buku');
        });

        Schema::create('genre', function (Blueprint $table) {
            $table->integer('id_genre');
            $table->string('kategori_genre');
        });

        Schema::create('member', function (Blueprint $table) {
            $table->integer('id_member');
            $table->string('username_member');
            $table->string('password_member');
            $table->string('nama_member');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_telp');
        });

        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer('id_pinjam');
            $table->integer('id_member');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->integer('id_admin');
        });

        Schema::create('penerbit', function (Blueprint $table) {
            $table->integer('id_penerbit');
            $table->string('nama_penerbit');
            $table->string('kontak_penerbit');
            $table->string('alamat');
        });

        Schema::create('pengarang', function (Blueprint $table) {
            $table->integer('id_pengarang');
            $table->string('nama_pengarang');
            $table->string('kontak');
        });

        Schema::create('pengembalian', function (Blueprint $table) {
            $table->integer('id_pengembalian');
            $table->integer('id_pinjam');
            $table->date('tanggal_pengembalian');
            $table->integer('denda');
            $table->integer('id_pilihan_bayar');
        });

        Schema::create('pilihan_pembayaran', function (Blueprint $table) {
            $table->integer('id_pilihan_bayar');
            $table->string('pilihan_transaksi');
            $table->integer('nomor_rekening');
        });

        Schema::create('poin_member', function (Blueprint $table) {
            $table->integer('id_member');
            $table->integer('id_pinjam');
            $table->integer('jumlah_poin');
            $table->date('tanggal_didapat');
        });

        Schema::create('rak', function (Blueprint $table) {
            $table->integer('id_rak');
            $table->string('lokasi_rak');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
        Schema::dropIfExists('buku');
        Schema::dropIfExists('detail_peminjaman');
        Schema::dropIfExists('detail_pengembalian');
        Schema::dropIfExists('genre');
        Schema::dropIfExists('member');
        Schema::dropIfExists('peminjaman');
        Schema::dropIfExists('penerbit');
        Schema::dropIfExists('pengarang');
        Schema::dropIfExists('pengembalian');
        Schema::dropIfExists('pilihan_pembayaran');
        Schema::dropIfExists('poin_member');
        Schema::dropIfExists('rak');
    }
};
