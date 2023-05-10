@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Small boxes (Stat box) -->
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengaturan Akun</li>
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
                    <h3 class="card-title">
                        <i class="fa fa-gears"></i>
                        Pengaturan Akun
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>aksi</th>
                                <th>id</th>
                                <th>nama</th>
                                <th>nomor telepon</th>
                                <th>level</th>
                                <th>email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=0;
                            @endphp
                            @foreach ($data as $item)
                            <form action="{{ route('ganti-level',$item->id) }}" method="post">
                                @csrf
                                @php
                                $no=$no+1;
                                @endphp
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <select id="level" name="level" class="form-control custom-select">
                                                    <option value="user" {{$item->level == "user" ? "selected" : ""}}>user</option>
                                                    <option value="petugas" {{$item->level == "petugas" ? "selected" : ""}}>petugas</option>
                                                    <option value="admin" {{$item->level == "admin" ? "selected" : ""}}>admin</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="submit" class="btn-primary btn" name="submit" id="submit"
                                                    value="simpan">
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->nomor_telepon}}</td>
                                    <td>{{$item->level}}</td>
                                    <td>{{$item->email}}</td>
                                </tr>
                            </form>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>aksi</th>
                                <th>id</th>
                                <th>nama</th>
                                <th>nomor telepon</th>
                                <th>level</th>
                                <th>email</th>
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
