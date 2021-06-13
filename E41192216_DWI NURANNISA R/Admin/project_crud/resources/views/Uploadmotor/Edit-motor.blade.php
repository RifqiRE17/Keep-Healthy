
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
              <li class="breadcrumb-item active">Bersih Motor</li>
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
            <h3>Ubah Data Bersih Motor</h3>
            </div>

            <div class="card-body">
                <form action="{{ url('update-motor', $dt->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
               
                  <div class="form-group">
                  <label class="control-label" for="hargalayanan">Harga Layanan</label>
                  <input type="text" id="hargalayanan" name="hargalayanan" placeholder="Harga Layanan" class="form-control @error('hargalayanan') 
                    is-invalid @enderror" value="{{ old('name', $dt->hargalayanan) }}">
                    @error('hargalayanan')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                  <label class="control-label" for="upload_foto">Upload Foto</label>
                  <input type="file" id="upload_foto" name="upload_foto" class="form-control @error('upload_foto')
                    is-invalid @enderror" autofoucus>
                    @error('upload_foto')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <img src="{{ asset('motor/'. $dt->upload_foto ) }}" height="5%" width="10%" alt="" srcset="">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Ubah Data</button>
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
