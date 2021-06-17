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
                            <h1 class="m-0">MITRA</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Mitra</li>
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
                            <a href="{{ route('create-gambar') }}" class="btn btn-success">Tambah Data <i
                                    class="fas fa-plus-square"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="GET" action="{{url('data-gambar')}}">
                            <input type="text" name="keyword">
                            <button type="submit">Pencarian</button>
                        </form>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <th>Nomor</th>
                                <th>Alamat</th>
                                <th>Upload KTP</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($dataGambar as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nomor }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="{{ asset('ktp/'. $item->ktp ) }}" target="_blank"
                                        rel="noopener noreferrer">Lihat Foto KTP</a>
                                </td>

                                <td>
                                    <a href="{{ url('edit-gambar',$item->id) }}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="#"><i class="fas fa-trash-alt delete" data-id="{{ $item->id }}"
                                            data-nama="{{ $item->nama }}" style=" color: red"></i></a>
                                </td>



                            </tr>
                            @endforeach
                        </table>
                        <ul class="pagination justify-content-center mb-10">
                            {{ $dataGambar->links() }}
                        </ul>
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
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>


    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
    @include('sweetalert::alert')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script>
$('.delete').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

    swal({
            title: "Yakin?",
            text: "Kamu Akan Menghapus Data " + nama + "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/delete-gambar/" + id + ""
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