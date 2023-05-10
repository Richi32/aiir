<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reklame;
use Illuminate\Http\Request;

class ReklameController extends Controller
{
    public function ganti_level(Request $request, $id)
    {
        User::where('id', $id)->update([
            'level' => $request->level,
        ]);
        return back()->with('toast_success', 'berhasil mengganti level');
    }
    public function tambah_izin_reklame(Request $request)
    {
        if ($request->file('bertas_tempat_pemasangan') != '' || $request->file('bertas_tempat_pemasangan') != null) {
            Reklame::create([
                'status' => $request->status,
                'email' => $request->email,
                'nomor_telepon' => $request->nomor_telepon,

                'berkas_ktp' => base64_encode(file_get_contents($request->file('berkas_ktp'))),
                // 'berkas_ktp'=>$src,
                'berkas_formulir' => base64_encode(file_get_contents($request->file('berkas_formulir'))),
                'berkas_pajak' => base64_encode(file_get_contents($request->file('berkas_pajak'))),
                'berkas_jabong' => base64_encode(file_get_contents($request->file('berkas_jabong'))),
                'bertas_tempat_pemasangan' => base64_encode(file_get_contents($request->file('bertas_tempat_pemasangan'))),
            ]);
        } else {
            Reklame::create([
                'status' => $request->status,
                'email' => $request->email,
                'nomor_telepon' => $request->nomor_telepon,

                'berkas_ktp' => base64_encode(file_get_contents($request->file('berkas_ktp'))),
                // 'berkas_ktp'=>$src,
                'berkas_formulir' => base64_encode(file_get_contents($request->file('berkas_formulir'))),
                'berkas_pajak' => base64_encode(file_get_contents($request->file('berkas_pajak'))),
                'berkas_jabong' => base64_encode(file_get_contents($request->file('berkas_jabong'))),
            ]);
        }

        return back()->with('toast_success', 'berhasil mengajukan');
    }
    public function tolak_izin_reklame($id)
    {
        Reklame::where('id', $id)->update([
            'status' => 'ditolak',
        ]);
        return back()->with('toast_success', 'berhasil ditolak');
    }
    public function proses_ulang_izin($id)
    {
        Reklame::find($id)->delete();
        return view('form.pengajuan-izin');
    }
    public function proses_izin_reklame(Request $request, $id)
    {
        Reklame::where('id', $id)->update([
            'status' => 'proses',
            'nik' => $request->nik,
            'nama_pemohon' => $request->nama_pemohon,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat_rumah' => $request->alamat_rumah,
            'npwpd' => $request->npwpd,
            'nama_perusahaan' => $request->nama_perusahaan,
            'jenis_usaha' => $request->jenis_usaha,
            'alamat_usaha' => $request->alamat_usaha,

            'tipe_reklame' => $request->tipe_reklame,
            'jenis_reklame' => $request->jenis_reklame,
            'bunyi_reklame' => $request->bunyi_reklame,
            'ukuran_reklame' => $request->ukuran_reklame,
            'tempat_pasang_reklame' => $request->tempat_pasang_reklame,
            'jumlah_reklame' => $request->jumlah_reklame,
            'tanggal_mulai_pasang_reklame' => $request->tanggal_mulai_pasang_reklame,
            'tanggal_akhir_pasang_reklame' => $request->tanggal_akhir_pasang_reklame,
            'tanggal_masuk_ujb' => $request->tanggal_masuk_ujb,

            'nominal_pajak' => $request->nominal_pajak,
            'nominal_ujb' => $request->nominal_ujb,
        ]);
        $database = Reklame::where('status', 'pengajuan')->get();
        return view('menu.proses-izin', ['data' => $database])->with('toast_success', 'berhasil memproses');
    }
    public function proses_validasi_kadin(Request $request, $id)
    {
        
        $current_year = date('Y');
        $last_sk_year = substr(Reklame::max('no_sk'), 0, 4);
        $new_no_sk = "1";
        $no_tipe_reklame == 'insidentil' ? 'I' : 'P'

        if ($current_year > $last_sk_year) {
            // Jika tahun ini telah berganti tahun, nomor SK diatur ulang menjadi 1
            $new_no_sk = "1";
        } else {
            // Jika belum berganti tahun, nomor SK diambil dari nomor SK terakhir yang ada di database
            $last_sk = Reklame::max('no_sk');
            $last_sk_number = (int) substr($last_sk, -3);
            $new_no_sk = str_pad($last_sk_number + 1, 3, "0", STR_PAD_LEFT);
        }

        $new_no_sk = "503.1 /" . $new_no_sk . "/" . $no_tipe_reklame . "/ 14.04 /" . $current_year;
    

        Reklame::where('id', $id)->update([
            
            'no_sk' => $new_no_sk,
            'status' => 'terbit',
            'nik' => $request->nik,
            'nama_pemohon' => $request->nama_pemohon,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat_rumah' => $request->alamat_rumah,
            'npwpd' => $request->npwpd,
            'nama_perusahaan' => $request->nama_perusahaan,
            'jenis_usaha' => $request->jenis_usaha,
            'alamat_usaha' => $request->alamat_usaha,

            'tipe_reklame' => $request->tipe_reklame,
            'jenis_reklame' => $request->jenis_reklame,
            'bunyi_reklame' => $request->bunyi_reklame,
            'ukuran_reklame' => $request->ukuran_reklame,
            'tempat_pasang_reklame' => $request->tempat_pasang_reklame,
            'jumlah_reklame' => $request->jumlah_reklame,
            'tanggal_mulai_pasang_reklame' => $request->tanggal_mulai_pasang_reklame,
            'tanggal_akhir_pasang_reklame' => $request->tanggal_akhir_pasang_reklame,
            'tanggal_masuk_ujb' => $request->tanggal_masuk_ujb,

            'nominal_pajak' => $request->nominal_pajak,
            'nominal_ujb' => $request->nominal_ujb,
        ]);

        $database = Reklame::where('status', 'proses')->get();
        return view('menu.validasi-kadin', ['data' => $database])->with('toast_success', 'berhasil memvalidasi');
    }
    public function cetak()
    {
    }
}
