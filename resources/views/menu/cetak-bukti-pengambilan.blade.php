<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>cetak bukti pembayaran</title>
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
            crossorigin="anonymous">

            <style>
                body {
                margin: 0;
                background: #ffffff;
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
    </head>
    <body>
        <div class="buttonprint" style="position: fixed;margin-left: 100px;">
            <button class="btn first" type="butten" onclick="window.stop();window.print();">Cetak</button>
        </div>
        <center>
            <div>
            <div><h2>BUKTI PENGAMBILAN IZINREKLAME</h2></div>
        <table class="table table-inverse table-responsive">
            @foreach ($data as $item)
            <tbody class="thead-inverse">
                <tr>
                    <td scope="row">nama pemohon</td>
                    <td>:</td>
                    <td>{{$item->nama_pemohon}}</td>
                </tr>
                <tr>
                    <td scope="row">no id</td>
                    <td>:</td>
                    <td>{{$item->id}}</td>
                </tr>
                <tr>
                    <td scope="row">no sk</td>
                    <td>:</td>
                    <td>{{$item->no_sk}}</td>
                </tr>
                <tr>
                    <td scope="row">jumlah reklame</td>
                    <td>:</td>
                    <td>{{$item->jumlah_reklame}}</td>
                </tr>
                <tr>
                    <td scope="row">awal pasang</td>
                    <td>:</td>
                    <td>{{$item->tanggal_mulai_pasang_reklame->format('Y-m-d','strtotime')}}</td>
                </tr>
                <tr>
                    <td scope="row">akhir pasang</td>
                    <td>:</td>
                    <td>{{$item->tanggal_akhir_pasang_reklame->format('Y-m-d','strtotime')}}</td>
                </tr>
                <tr>
                    <td scope="row">tanggal masuk jabong</td>
                    <td>:</td>
                    <td>{{$item->tanggal_masuk_ujb->format('Y-m-d','strtotime')}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </center>
    </body>
</html>
