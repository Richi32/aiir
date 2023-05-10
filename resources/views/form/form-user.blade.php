@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengajuan Izin</li>
            </ol>
        </nav>
    </div>
    <!-- Small boxes (Stat box) -->
    <div class="row mb-4">
        <div class="col-md-12">
            <a href="{{ asset('/file/formulir_permohonan_reklame.pdf') }}" class="btn btn-primary">
                <i class="fa fa-download mr-2"></i>
                Download Form Reklame (PDF)
            </a>
            <a href="{{ asset('/file/formulir_permohonan_reklame.doc') }}" class="btn btn-primary">
                <i class="fa fa-download mr-2"></i>
                Download Form Reklame (WORD)
            </a>
        </div>
    </div>
    <div class="row">
        {{-- mulai form --}}
        <form action="{{ route('tambah-izin-reklame') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- right column 2-->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-file-text-o"></i>
                            Pengajuan Izin
                        </h3>
                    </div>
                    <!-- /.card-header -->

                    <input type="hidden" name="status" id="status" value="pengajuan">
                    <input type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                    <input type="hidden" name="nomor_telepon" id="nomor_telepon"
                        value="{{ Auth::user()->nomor_telepon }}">
                    <input type="hidden" name="nama_pemohon" id="nama_pemohon" value="{{ Auth::user()->name }}">


                    <div class="card-body">
                        <div class="form-group">
                            <label for="berkas_formulir">
                                <span class="text-danger">*</span>
                                Scan Form Reklame (harus jelas/ bisa dibaca, max 5 mb)
                            </label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="berkas_formulir"
                                        id="berkas_formulir" accept="image/*, application/pdf" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkas_ktp">
                                <span class="text-danger">*</span>
                                Foto KTP pemohon (harus jelas/ bisa dibaca, max 5 mb)
                            </label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="berkas_ktp" id="berkas_ktp"
                                        accept="image/*, application/pdf" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkas_pajak">
                                <span class="text-danger">*</span>
                                Foto Pajak reklame (harus jelas/ bisa dibaca, max 5 mb)
                            </label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="berkas_pajak" id="berkas_pajak"
                                        accept="image/*, application/pdf" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkas_jabong">
                                <span class="text-danger">*</span>
                                Foto Jasa Bongkar (harus jelas/ bisa dibaca, max 5 mb)
                            </label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="berkas_jabong" id="berkas_jabong"
                                        accept="image/*, application/pdf" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bertas_tempat_pemasangan">Berkas-berkas/ Foto Tempat Pemasangan reklame <i>(opsional, max 5 mb)</i></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="bertas_tempat_pemasangan"
                                        id="bertas_tempat_pemasangan" accept="image/*, application/pdf">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">
                            <i class="fa fa-upload"></i>
                            Unggah Berkas
                        </button>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (right) -->
            {{-- akhir form --}}
        </form>


    </div>
    <!-- /.row -->
</div>

@endsection
