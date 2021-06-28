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
                            <h1 class="m-0">KATEGORI</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Kategori</li>
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

                        </div>
                    </div>



                    <div class="card-body">
                        <br>
                        <div class="col-md-4">
                            <form action="{{ url('kategori/data-kategori') }}" method="get">
                                <div class="input-group custom-search-form">
                                    <input type="text" name="keyword" class="form-control" placeholder="search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">Pencarian</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <br>
                        <table class="table table-bordered">
                            <tr>

                                <th>Nama Layanan Servis</th>
                            </tr>
                            @foreach ($kategori as $item)
                            <tr>

                                <td>{{ $item->layanan_servis }}</td>

                            </tr>
                            @endforeach
                        </table>
                        <br>



                        <ul class="pagination justify-content-center mb-10">
                            {{ $kategori->links() }}
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
    <!-- ./delete -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>



    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
    @include('sweetalert::alert')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<!-- <script>
$('.delete').click(function() {
    var idartikel = $(this).attr('data-id');
    var namaartikel = $(this).attr('data-nama');

    swal({
            title: "Yakin?",
            text: "Kamu Akan Menghapus Data " + namaartikel + "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/delete-artikel/" + idartikel + ""
                swal("Data Berhasil DiHapus", {
                    icon: "success",
                });
            } else {
                swal("Data Tidak Jadi DiHapus");
            }
        });

});
</script> -->

</html>