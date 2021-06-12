
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
              <li class="breadcrumb-item active">Data User</li>
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
            <h3>Create Data User</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('simpan-user') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label" for="nama">Nama Admin</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                  </div>
                  <div class="form-group">
                  <label class="control-label" for="jabatan">Jenis Kelamin</label>
                    <input type="text" id="jeniskelmain" name="jeniskelamin" class="form-control" placeholder="Jenis Kelamin">
                  </div>
                  <div class="form-group">
                  <label class="control-label" for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <input type="file" id="upload_foto" name="upload_foto" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="file" id="upload_ktp" name="upload_ktp" class="form-control">
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
