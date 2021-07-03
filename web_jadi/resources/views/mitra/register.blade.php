<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <script src="/js/modernizr-3.5.0.min.js"></script>

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Tambah Data Mitra</h2>
                            <form action="" method="POST" enctype="multipart/form-data">
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control " id="nama" name="nama"
                                            value="{{old('nama')}}">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="foto" class="form-label">Foto Pengguna</label>
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-6">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            value="{{old('alamat')}}">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="ktp" class="form-label">KTP</label>
                                        <input type="file" class="form-control" id="ktp" name="ktp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="nomor" class="form-label">Nomor Telepon</label>
                                        <input type="number" class="form-control" id="nomor" name="nomor"
                                            value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-6">
                                        <label for="layanan_servis" class="form-label">Memilih Layanan
                                            Kebersihan</label>
                                        <select class="form-control" id="layanan_servis" name="layanan_servis"
                                            value="{{old('layanan_servis')}}">
                                            <option value="">Pilih Layanan Service</option>
                                            @foreach($kategoris as $kategori)
                                            <option value="{{$kategori['layanan_servis']}}">
                                                {{$kategori['layanan_servis']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary mt-5">TAMBAH</button>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{url('/img/work.png')}}" class="img-fluid" alt="Image" />
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- End of Page Wrapper -->
    @include('sweetalert::alert')



</body>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</html>