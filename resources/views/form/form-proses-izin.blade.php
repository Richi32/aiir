@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Main content untuk form nya-->
    <section class="content">

        @foreach ($data as $item)

        <form action="{{ route('proses-izin-reklame',$item->id) }}" method="post">
            @csrf

            <div class="container-fluid">
                <input type="submit" class="btn-primary btn" name="submit" id="submit" value="proses">
                <a href="{{ route('tolak-izin-reklame',$item->id)}}" class="btn-danger btn">ditolak</a>
                <div class="row">
                    <!-- left column 1-->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Formulir Pemohon</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" class="form-control" id="nik">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pemohon">Nama Pemohon</label>
                                    <input type="text" name="nama_pemohon" class="form-control" id="nama_pemohon" value="{{$item->nama_pemohon}}">
                                </div>
                                <div class="form-group">
                                    <label for="nomor_telepon">Telefon/Fax</label>
                                    <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" value="{{$item->nomor_telepon}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_rumah">Alamat Rumah</label>
                                    <input type="text" name="alamat_rumah" class="form-control" id="alamat_rumah">
                                </div>
                                <div class="form-group">
                                    <label for="npwpd">NPWPD</label>
                                    <input type="text" name="npwpd" class="form-control" id="npwpd">
                                </div>
                                <div class="form-group">
                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                    <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_usaha">Jenis Usaha</label>
                                    <input type="text" name="jenis_usaha" class="form-control" id="jenis_usaha">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_usaha">Alamat Perusahaan</label>
                                    <input type="text" name="alamat_usaha" class="form-control" id="alamat_usaha">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- left column 2-->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Formulir Pajak</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nominal_pajak">nominal pajak</label>
                                    <input type="number" name="nominal_pajak" class="form-control" id="nominal_pajak">
                                </div>
                                <div class="form-group">
                                    <label for="nominal_ujb">nominal jasa bongkar</label>
                                    <input type="number" name="nominal_ujb" class="form-control" id="nominal_ujb">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                    <!-- right column 1-->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tipe_reklame">Tipe Reklame</label>
                                    <select id="tipe_reklame" name="tipe_reklame" class="form-control" id="tipe_reklame">
                                        <option value="insidentil" selected>insidentil</option>
                                        <option value="permanen">permanen</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_reklame">Jenis Reklame</label>
                                    <input type="text" name="jenis_reklame" class="form-control" id="jenis_reklame">
                                </div>
                                <div class="form-group">
                                    <label for="bunyi_reklame">Bunyi Reklame</label>
                                    <input type="text" name="bunyi_reklame" class="form-control" id="bunyi_reklame">
                                </div>
                                <div class="form-group">
                                    <label for="ukuran_reklame">Ukuran Panjang & Lebar & Muka</label>
                                    <input type="text" name="ukuran_reklame" class="form-control" id="ukuran_reklame">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_pasang_reklame">Tempat Pasang</label>
                                    <input type="text" name="tempat_pasang_reklame" class="form-control"
                                        id="tempat_pasang_reklame">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_reklame">Jumlah reklame</label>
                                    <input type="text" name="jumlah_reklame" class="form-control" id="jumlah_reklame">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_mulai_pasang_reklame">tanggal_mulai_pasang_reklame</label>
                                    <input type="date" name="tanggal_mulai_pasang_reklame" class="form-control"
                                        id="tanggal_mulai_pasang_reklame">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_akhir_pasang_reklame">tanggal_akhir_pasang_reklame</label>
                                    <input type="date" name="tanggal_akhir_pasang_reklame" class="form-control"
                                        id="tanggal_akhir_pasang_reklame">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_masuk_ujb">tanggal_masuk_ujb</label>
                                    <input type="date" name="tanggal_masuk_ujb" class="form-control"
                                        id="tanggal_masuk_ujb">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        {{-- <a href="{{$item->berkas_ktp}}">p</a> --}}
                        {{-- <img class="img" src="{{$item->berkas_ktp}}" alt="{{asset($item->berkas_ktp)}}"> --}}
                        {{-- <img src="data:image/png;base64, {{$item->berkas_ktp}}" /> --}}
                    </div>
                    <!-- right column 2-->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Scan Berkas Formulir Pengajuan</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <a href="data:application/pdf;base64, {{$item->berkas_formulir}}"
                                                class="btn btn-sm btn-success"
                                                download="scan_formulir.pdf">
                                                Download Scan Berkas Formulir Pengajuan
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto KTP</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <a href="data:image/png;base64, {{$item->berkas_ktp}}"
                                                class="btn btn-sm btn-success"
                                                download="foto_ktp.png">
                                                Download Foto KTP
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Pajak</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <a href="data:image/png;base64, {{$item->berkas_pajak}}"
                                                class="btn btn-sm btn-success"
                                                download="foto_pajak.png">
                                                Download Foto Pajak
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Jasa Bongkar </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <a href="data:image/png;base64, {{$item->berkas_jasa_bongkar}}"
                                                class="btn btn-sm btn-success"
                                                download="foto_jasa_bongkar.png">
                                                Download Foto Jasa Bongkar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Tempat Pemasangan (untuk yang permanen)
                                        *opsional</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            @if ($item->berkas_tempat_pemasangan != null)
                                                <a href="data:image/png;base64, {{$item->berkas_tempat_pemasangan}}" class="btn btn-sm btn-success"
                                                    download="foto_tempat_pemasangan.png">
                                                    Download Foto Tempat Pemasangan
                                                </a>
                                            @else
                                                No upload file.
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

        </form>
        @endforeach

    </section>
</div>

@endsection
