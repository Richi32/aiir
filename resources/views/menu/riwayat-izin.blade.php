@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Small boxes (Stat box) -->
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Riwayat Izin</li>
            </ol>
        </nav>
    </div>
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- <div class="col-md-2"> <a href="tambah-pengajuan.html" class="btn
            btn-primary btn-block mb-3"><i class="fas fa-plus-circle mr-2"></i> Tambah
            Pengajuan</a> </div> -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-history"></i> List Riwayat Izin</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>No Daftar</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Tanggal akhir pasang</th>
                                <!-- <th>Pemohon</th> -->
                                <th>Status</th>
                                <!-- <th>Verifikasi</th> <th>Survei Teknis</th> <th>Input Jabong</th>
                                    <th>Verifikasi Jabong</th> <th>Validasi Kadis</th> <th>Bongkar</th>
                                    <th>Selesai</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=0;
                            @endphp
                            @foreach ($data as $item)
                            @php
                            $no=$no+1;
                            @endphp
                            <tr>
                                <td>{{$no}}</td>
                                <td>
                                    <a href="{{url('cetak-izin',$item->id)}}" class="btn btn-primary">Cetak Izin</a>
                                </td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->created_at->format('Y-m-d','strtotime')}}</td>
                                <td>{{$item->tanggal_akhir_pasang_reklame->format('Y-m-d','strtotime')}}</td>
                                <!-- <td>Alfian Angga</td> -->
                                <td>
                                    <span class="right badge badge-success">{{$item->status}}</span>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>No Daftar</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Tanggal akhir pasang</th>
                                <!-- <th>Pemohon</th> -->
                                <th>Status</th>
                                <!-- <th>Verifikasi</th> <th>Survei Teknis</th> <th>Input Jabong</th>
                                    <th>Verifikasi Jabong</th> <th>Validasi Kadis</th> <th>Bongkar</th>
                                    <th>Selesai</th> -->
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

@endsection
