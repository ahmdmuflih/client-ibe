<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Buku;
use App\Models\DetailPeminjaman;
use App\Models\DetailPengembalian;
use App\Models\Genre;
use App\Models\Member;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pengarang;
use App\Models\Pengembalian;
use App\Models\PilihanPembayaran;
use App\Models\PoinMember;
use App\Models\Rak;


class SuklibController extends Controller
{
    public function riwayat() {
        $bukuData = Buku::all();
        $detailpinjamData = DetailPeminjaman::all();
        $pinjamData = Peminjaman::all();
        $pengarangData = Pengarang::all();

        return view('riwayat', [
            'bukuData' => $bukuData,
            'detailpinjamData' => $detailpinjamData,
            'pinjamData' => $pinjamData,
            'pengarangData'=> $pengarangData
        ]);
    }
}
