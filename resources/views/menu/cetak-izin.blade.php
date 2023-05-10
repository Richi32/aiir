<html lang="id">
    <head>
        <style>
            body {
                margin: 0;
                background: #CCCCCC;
            }

            div.landscape,
            div.portrait {
                margin: 10px auto;
                padding: 10mm;
                border: solid 1px black;
                overflow: hidden;
                page-break-after: always;
                background: white;
            }

            div.portrait {
                width: 8.27in;
                height: 11.69in;
            }

            div.landscape {
                width: 11.69in;
                height: 8.27in;
            }

            @media print {
                body {
                    background: none;
                    -ms-zoom: 1.665;
                }

                div.landscape,
                div.portrait {
                    margin: 0;
                    padding: 0;
                    border: none;
                    background: none;
                }

                div.landscape {
                    transform: rotate(270deg) translate(-276mm, 0);
                    transform-origin: 0 0;
                }

                .buttonprint {
                    display: none;
                }
            }

            .header > div {
                display: inline-block;
                text-align: center;
                vertical-align: middle;
            }

            h1 {
                font-size: 14px;
                text-align: center;
            }

            h2 {
                font-size: 13px;
                text-align: center;
            }

            .sparate {
                border-bottom: 2px solid black;
                padding-top: 10px;
            }

            .judul {
                text-align: center;
                font-size: 18px;
                padding-bottom: 40px;
            }

            .table-bayangan {
                width: 100%;
            }

            p.justify {
                text-align: justify;
            }

            table.benggang td {
                padding: 10px 0;
            }

            .btn {
                box-sizing: border-box;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background-color: #0095ff;
                border: 2px solid #0095ff;
                border-radius: 0.6em;
                color: black;
                cursor: pointer;
                display: flex;
                align-self: center;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1;
                margin: 20px;
                padding: 1.2em 2.8em;
                text-decoration: none;
                text-align: center;
                text-transform: uppercase;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
            }

            .btn:focus,
            .btn:hover {
                color: #fff;
                outline: 0;
            }
        </style>

        <style>
            div.portrait {
                width: 8.27in;
                height: 12.99in;
            }
        </style>
    </head>
    <body>
        @php
            setlocale(LC_TIME, 'id_ID');
        @endphp
        @foreach ($data as $item)

        <div class="buttonprint" style="position: fixed;margin-left: 100px;">
            <button class="btn first" type="butten" onclick="window.stop();window.print();">Cetak</button>
        </div>

        <title>Surat Izin</title>
        <div class="portrait">
            <div style="text-align: center;">
                <img
                    src="{{ asset('gambar\kopIzin.png') }}"
                    alt="KOPSurat"
                    style="height: 90px;"
                    width="70%">
            </div>
            <h1 style="text-align: center;font-size: 18px;padding-bottom: 10px;">
                <span style="text-decoration: underline;">SURAT IZIN PENEMPATAN DAN PEMASANGAN REKLAME</span>
                <br>
                Nomor : {{$item->no_sk}}
                {{-- Nomor : 503.1/{{$item->no_sk}}/{{$item->tipe_reklame == 'insidentil' ? 'I' : 'P'}}/14.04/2021 --}}
            </h1>

            <span style="font-size:14px">DASAR :</span>
            <table class="table-bayangan" style="text-align: justify;font-size: 13px;">
                <tbody>
                    <tr>
                        <td style="width: 8%;"></td>
                        <td valign="top">1.</td>
                        <td>Surat Permohonan Izin Penempatan dan Pemasangan Reklame, Tanggal 06 Desember
                            2021.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">2.</td>
                        <td>Undang Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">3.</td>
                        <td>Undang Undang Nomor 28 Tahun 2009 tentang Pajak Daerah dan Retribusi Daerah.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">4.</td>
                        <td>Peraturan Daerah Kabupaten Tulungagung Nomor 17 Tahun 2016 tentang Pajak Daerah.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">5.</td>
                        <td>Peraturan Daerah Kabupaten Tulungagung Nomor 20 Tahun 2016 tentang
                            Pembentukan dan Sususan Perangkat Daerah Kabupaten Tulungagung.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">6.</td>
                        <td>Peraturan Bupati Tulungagung Nomor 49 Tahun 2017 Tentang Penyelenggaraan
                            Reklame di Kabupaten Tulungagung.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">7.</td>
                        <td>Keputusan Bupati Tulungagung Nomor 188.45 / 140 / 013 / 2017 tentang
                            Pendelegasian Wewenang Penandatanganan Bidang Perijinan dari Bupati Kepada
                            Kepala Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Kabupaten
                            Tulungagung.</td>
                    </tr>
                </tbody>
            </table>

            <h1 style="font-size: 16px;">MEMBERIKAN IZIN</h1>
            <table class="table-bayangan" style="font-size: 14px;">
                <tbody>
                    <tr>
                        <td style="width: 5%;"></td>
                        <td style="width: 24%;" valign="top">Kepada</td>
                        <td style="width: 1%;">:</td>
                        <td style="width: 70%;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Nama / Telp</td>
                        <td>:</td>
                        <td>{{$item->nama_pemohon}}/{{$item->nomor_telepon}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Alamat</td>
                        <td>:</td>
                        <td>{{$item->alamat_rumah}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">NPWPD</td>
                        <td>:</td>
                        <td>{{$item->npwpd}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Nama Perusahaan</td>
                        <td>:</td>
                        <td>{{$item->nama_perusahaan}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Alamat Perusahaan</td>
                        <td>:</td>
                        <td>{{$item->alamat_usaha}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">Untuk Menempati dan Memasang Reklame dengan :
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Jenis Reklame</td>
                        <td>:</td>
                        <td>{{$item->jenis_usaha}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Teks / Naskah</td>
                        <td>:</td>
                        <td>{{$item->bunyi_reklame}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Ukuran</td>
                        <td>:</td>
                        <td>{{$item->ukuran_reklame}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Lokasi / Jalan</td>
                        <td>:</td>
                        <td>{{$item->tempat_pasang_reklame}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Jumlah</td>
                        <td>:</td>
                        <td>{{$item->jumlah_reklame}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Jangka Waktu</td>
                        <td>:</td>
                        <td>{{$item->tanggal_mulai_pasang_reklame->format('d F Y','strtotime')}} - {{$item->tanggal_akhir_pasang_reklame->format('d F Y','strtotime')}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">Tanggal Masuk UJB</td>
                        <td>:</td>
                        <td>{{$item->tanggal_masuk_ujb->format('d F Y','strtotime')}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <span style="font-size:14px">Ketentuan-ketentuan dan kewajiban pemegang izin :</span>
            <table class="table-bayangan" style="text-align: justify;font-size: 13px;">
                <tbody>
                    <tr>
                        <td style="width: 5%;"></td>
                        <td valign="top">1.</td>
                        <td>Wajib membayar Pajak Reklame, sesuai dengan Peraturan Daerah Nomor : 17
                            Tahun 2016 sebesar
                            <strong>Rp. {{$item->nominal_pajak}},- (Satu juta empat ratus dua puluh sembilan ribu empat
                                ratus tiga puluh empat)</strong>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">2.</td>
                        <td>Wajib membayar UJB sesuai dengan Peraturan Bupati No. 49 Tahun 2017 Sebesar
                            <strong>Rp. {{$item->nominal_ujb}},- (Satu juta empat ratus dua puluh sembilan ribu empat
                                ratus tiga puluh empat)</strong>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">3.</td>
                        <td>Setelah izin tidak berlaku baik karena dicabut maupun berakhir masa
                            berlakunya izin dan tidak diperpanjang, maka papan Reklame harus dibongkar atas
                            biaya pemegang izin.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">4.</td>
                        <td>Pemasangan Reklame harus sesuai dengan Keindahan, Kesopanan, Ketertiban
                            Umum, Keamanan, Kesusisalaan dan Kesehatan.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">5.</td>
                        <td>Izin Reklame hanya dapat digunakan sesuai dengan permohonan dan dilarang
                            digunakan untuk jenis Reklame lainnya.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">6.</td>
                        <td>Tanggal, Nomor Izin harus dicantumkan pada sarana reklame.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">7.</td>
                        <td>Apabila Tanah tersebut sewaktu-waktu dibutuhkan oleh Pemerintah, maka
                            Reklame tersebut harus dibongkar atas biaya pemegang izin.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">8.</td>
                        <td>Semua resiko yang mengakibatkan kerugian orang lain baik moril maupun materi
                            ditanggung oleh pemasang / pemohon.</td>
                    </tr>
                </tbody>
            </table>
            <div style="text-align: justify;font-size:14px">
                Hal-hal yang belum diatur didalam izin ini akan diatur kemudian dan apabila di
                kemudian hari terdapat kekeliruan dalam pemberian izin ini, maka diadakan
                perubahan pembetulan sebagaimana mestinya.
            </div>
            <table class="table-bayangan" style="margin-top:15px;">
                <tbody>
                    <tr>
                        <td style="width: 51%;"></td>
                        <td style="padding-left: 70px;font-size: 14px;">Ditetapkan di : Tulungagung
                            <br>
                            Pada Tanggal : {{$item->updated_at->format('d F Y','strtotime')}}
                        </td>
                    </tr>
                    <tr>
                        <td valign="bottom">
                            <table class="table-bayangan" style="font-size: 12px;">
                                <tbody>
                                    <tr>
                                        <td colspan="2">Tembusan disampaikan Kepada :</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Yth. Sdr :
                                        </td>
                                        <td>1. Kepala Bapenda Kab. Tulungagung
                                            <br>
                                            <span style="text-decoration: underline;">
                                                2. Kepala Satpol PP Kab Tulungagung</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td
                            style="text-align:center;font-weight: bold;padding-top: 10px;font-size: 14px;">A.n BUPATI TULUNGAGUNG
                            <br>
                            KEPALA DINAS PENANAMAN MODAL<br>
                            DAN PELAYANAN TERPADU SATU PINTU<br>
                            KABUPATEN TULUNGAGUNG<br>
                            <div style="margin-bottom: 3px;margin-top: 70px;">
                            </div>
                            <span style="text-decoration: underline">FAJAR WIDARIYANTO, S.P., M.M.</span><br>
                            Pembina Tk.I<br>
                            NIP 19680715 199803 1 008<br>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        @endforeach
    </body>
</html>
