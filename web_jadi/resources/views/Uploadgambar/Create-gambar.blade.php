<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pegawai</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Menambah Data Pegawai</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('simpan-gambar') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="nama">Nama Pegawai</label>
                                <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control @error('nama')
                    is-invalid @enderror" autofocus>
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nomor">Nomor</label>
                                <input type="text" id="nomor" name="nomor" placeholder="nomor" class="form-control @error('nomor')
                    is-invalid @enderror" autofocus>
                                @error('nomor')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="alamat">Alamat</label>
                                <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control @error('alamat')
                    is-invalid @enderror" autofocus>
                                @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mt-2">
                                    <div class="col-lg-6">
                                        <label for="layanan_servis" class="form-label">Memilih Layanan Kebersihan</label>
                                        <select class="form-control" id="layanan_servis" name="layanan_servis"
                                            value="{{old('layanan_servis')}}">
                                            <option value="">Pilih Layanan Service</option>
                                            @foreach($data as $kategori)
                                            <option value="{{$kategori['layanan_servis']}}">{{$kategori['layanan_servis']}}</option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="control-label" for="upload_foto">KTP</label>
                                <input type="file" id="ktp" name="ktp" class="form-control @error('ktp')
                    is-invalid @enderror" autofoucus>
                                @error('ktp')
                                <div class="invalid-feedback">{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="foto">Foto Pengguna</label>
                                <input type="file" id="foto" name="foto" class="form-control @error('foto')
                    is-invalid @enderror" autofoucus>
                                @error('foto')
                                <div class="invalid-feedback">{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')


</body>

</html>