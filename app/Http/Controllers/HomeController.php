<?php

namespace App\Http\Controllers;

use App\Models\Reklame;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // view desain menu
    public function index()
    {
        return view('home');
    }
    public function view_proses_izin()
    {
        $database=Reklame::where('status','pengajuan')->get();
        return view('menu.proses-izin',['data'=>$database]);
    }
    public function view_izin_aktif()
    {
        if (auth()->user()->level=="user") {
            $database=Reklame::whereDate('tanggal_akhir_pasang_reklame', '>=', Carbon::today()->setTimezone('Asia/Jakarta'))
                        ->where('email', '=', Auth::user()->email)->get();
                        return view('menu.izin-aktif',['data'=>$database]);
            }
        else {
            $database=Reklame::whereDate('tanggal_akhir_pasang_reklame', '>=', Carbon::today()->setTimezone('Asia/Jakarta'))->get();
            return view('menu.izin-aktif',['data'=>$database]);
            }
    }
    public function view_izin_belum_terbit()
    {
        if (auth()->user()->level=="user") {
            $database = Reklame::where('status', '!=', 'terbit')
                        ->where('email', '=', Auth::user()->email)->get();
                        return view('menu.izin-belum-terbit', ['data' => $database]);
            }
        else {
            $database = Reklame::where('status', '!=', 'terbit')->get();
            return view('menu.izin-belum-terbit', ['data' => $database]);
            }
    }
    public function view_riwayat_izin()
    {
        // if (auth()->user()->level=="user") {
        //     $database=Reklame::whereDate('tanggal_akhir_pasang_reklame', '<', Carbon::today()->setTimezone('Asia/Jakarta'))
        //                 ->where('email', '==', Auth::user()->email)->get();
        //                 return view('menu.riwayat-izin',['data'=>$database]);
        //     }
        // else {
        //     $database=Reklame::whereDate('tanggal_akhir_pasang_reklame', '<', Carbon::today()->setTimezone('Asia/Jakarta'))->get();
        //     return view('menu.riwayat-izin',['data'=>$database]);
        //     }
        if (auth()->user()->level=="user") {
            $database=Reklame::where('email', '==', Auth::user()->email)->get();
                        return view('menu.riwayat-izin',['data'=>$database]);
            }
        else {
            $database=Reklame::all();
            return view('menu.riwayat-izin',['data'=>$database]);
            }
    }
    public function view_validasi_kadin()
    {
        $database=Reklame::where('status','proses')->get();
        return view('menu.validasi-kadin',['data'=>$database]);
    }
    public function view_akun()
    {
        $database=User::all();
        return view('menu.akun',['data'=>$database]);
    }
    public function view_masa_tenggang_izin()
    {
        $hariempatbelas=Reklame::whereDate('tanggal_akhir_pasang_reklame')->Carbon::addWeeks(+2)->setTimezone('Asia/Jakarta');
        // $minggu2=Carbon::today()->addWeeks(+2)->setTimezone('Asia/Jakarta');
        $hariini=Carbon::today()->setTimezone('Asia/Jakarta');
        // $database=Reklame::whereBetween('tanggal_akhir_pasang_reklame', [$hariini, $minggu2])->get();
        $database=Reklame::whereBetween('tanggal_akhir_pasang_reklame', [$hariini, $hariempatbelas])->get();
        return view('menu.masa-tenggang-izin',['data'=>$database]);
    }

    // view form
    public function view_form_user()
    {
        return view('form.form-user');
    }
    public function view_form_proses_izin($id)
    {
        $database=Reklame::where('id',$id)->get();
        return view('form.form-proses-izin',['data'=>$database]);
    }
    public function view_form_validasi_kadin($id)
    {
        $database=Reklame::where('id',$id)->get();
        return view('form.form-validasi-kadin',['data'=>$database]);
    }

    // view cetak
    public function cetak_izin($id)
    {
        $database=Reklame::where('id',$id)->get();
        return view('menu.cetak-izin',['data'=>$database]);
    }
    // view cetak
    public function cetak_bukti_pengambilan($id)
    {
        $database=Reklame::where('id',$id)->get();
        return view('menu.cetak-bukti-pengambilan',['data'=>$database]);
    }
}
