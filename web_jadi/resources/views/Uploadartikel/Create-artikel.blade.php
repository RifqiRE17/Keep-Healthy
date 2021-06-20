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
                                <li class="breadcrumb-item active">Data Artikel</li>
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
                        <h3>Create Data Artikel</h3>
                    </div>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="sr-only">90% Complete (success)</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('simpan-artikel') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="namaartikel">Nama Artikel</label>
                                <input type="text" id="namaartikel" name="namaartikel" placeholder="Nama Artikel" class="form-control @error('namaartikel')
                    is-invalid @enderror" autofocus>
                                @error('namaartikel')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Isi Artikel</label>
                                <textarea id="summernote" name="isiartikel" placeholder="Isi Artikel"
                                    class="textarea"></textarea>
                                @error('conten')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tanggal_upload">Tanggal Upload</label>
                                <input type="date" id="tanggal_upload" name="tanggal_upload" placeholder="Tanggal Upload" class="form-control @error('tanggal_upload')
                    is-invalid @enderror" autofocus>
                                @error('tanggal_upload')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="upload_foto">Foto Artikel</label>
                                <input type="file" id="upload_foto" name="upload_foto" class="form-control @error('upload_foto')
                    is-invalid @enderror" autofoucus>
                                @error('upload_foto')
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

    <!-- @push('styles')
    <link href="{{asset('vendor/summernote/summernote.min.css')}}" rel="stylesheet">
    @endpush -->

    <!-- @push('script')
    <script type="text/javascript" src="{{asset('vendor/summernote/summernote.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    </script>
    @endpush -->

</body>

</html>