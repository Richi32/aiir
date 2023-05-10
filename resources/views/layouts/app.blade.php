<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    {{-- script manual karena mixnya nggak bisa :v  --}}
    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    {{-- <script src="{{asset('public/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('public/adminlte/dist/js/adminlte.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> --}}
    <!-- Scripts mix-->
    <script src="{{ asset('js/template.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    {{-- style template sama juga karena mix nya nggak bisa :v --}}
    {{-- <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> --}}
    {{-- script mix  --}}
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="pace-secondary" style="background-color: #ECF0F5">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #222C33;">
            <div class="container-fluid">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        {{-- menu di atas sebelum nama akun--}}
                        @if (auth()->user()->level=="admin"||auth()->user()->level=="petugas"||auth()->user()->level=="user")
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                Perizinan
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/pengajuan-izin">Pengajuan Izin</a>
                                <a class="dropdown-item" href="/izin-belum-terbit">Izin Belum Terbit</a>
                                <a class="dropdown-item" href="/izin-aktif">Izin Aktif</a>
                            </div>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/masa-tenggang-izin">Masa Tenggang</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/riwayat-izin">Riwayat</a>
                        </li>
                        @endif

                        @if (auth()->user()->level=="admin"||auth()->user()->level=="petugas")
                        <li class="nav-item">
                            <a class="nav-link" href="/proses-izin">Proses Izin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/validasi-kadin">Validasi Kadin</a>
                        </li>
                        @endif

                        @if (auth()->user()->level=="admin")
                        <li class="nav-item">
                            <a class="nav-link" href="/akun">Akun</a>
                        </li>
                        @endif
                        {{-- akhir menu biasa  --}}

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- FOOTER  --}}
    <footer class="bg-light text-center text-lg-start fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2);">
           <marquee behavior="right" direction="scroll">
            © 2022 Copyright:
            <b>
                <a class="text-dark" href="/" style="text-decoration: none;">DPMPTSP Kab. Tulungagung</a>
            </b>
           </marquee>
        </div>
        <!-- Copyright -->
    </footer>
<!-- Page specific script -->
{{-- nggak bisa  --}}
<script>

    $(document).ready(function(){
        $('#example3').DataTable();
    })

    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });


    });
  </script>
  @yield('script')
@include('sweetalert::alert')
</body>
</html>
