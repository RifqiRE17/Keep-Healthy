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
                            <h1 class="m-0">LAYANAN SERVICE</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Bersih Toilet</li>
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
                        <div class="card-tools">
                            <a href="{{ route('create-toilet') }}" class="btn btn-success">Tambah Data <i
                                    class="fas fa-plus-square"></i></a>
                        </div>
                    </div>

                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="sr-only">90% Complete (success)</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>

                                <th>Harga Layanan</th>
                                <th>Upload Foto</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($dataToilet as $item)
                            <tr>

                                <td>{{ $item->hargalayanan }}</td>
                                <td>
                                    <a href="{{ asset('toilet/'. $item->upload_foto ) }}" target="_blank"
                                        rel="noopener noreferrer">Lihat Foto</a>
                                </td>
                                <td width="10%">
                                    <a href="{{ url('edit-toilet',$item->id) }}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="#"><i class="fas fa-trash-alt delete" data-id="{{ $item->id }}"
                                            style="color: red"></i></a>
                                </td>



                            </tr>
                            @endforeach
                        </table>
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
    <!-- ./delete -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
    @include('sweetalert::alert')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<script>
$('.delete').click(function() {
    var toiletid = $(this).attr('data-id');
    swal({
            title: "Yakin?",
            text: "Kamu Akan Menghapus Data Dengan id " + toiletid + "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/delete-toilet/" + toiletid + ""
                swal("Data Berhasil DiHapus", {
                    icon: "success",
                });
            } else {
                swal("Data Tidak Jadi DiHapus");
            }
        });

});
</script>

</html>