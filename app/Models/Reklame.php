<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reklame extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_sk',
        'status',
        'email',
        'nik',
        'nama_pemohon',
        'nomor_telepon',
        'alamat_rumah',
        'npwpd',
        'nama_perusahaan',
        'jenis_usaha',
        'alamat_usaha',
        'jenis_reklame',
        'bunyi_reklame',
        'ukuran_reklame',
        'tempat_pasang_reklame',
        'jumlah_reklame',
        'tanggal_mulai_pasang_reklame',
        'tanggal_akhir_pasang_reklame',
        'tanggal_masuk_ujb',
        'nominal_pajak',
        'nominal_ujb',
        'berkas_ktp',
        'berkas_formulir',
        'berkas_pajak',
        'berkas_jabong',
        'bertas_tempat_pemasangan',
    ];

    protected $dates = [
        'tanggal_mulai_pasang_reklame',
        'tanggal_akhir_pasang_reklame',
        'tanggal_masuk_ujb',
    ];
}
