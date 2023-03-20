<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PERFORMA | ARUK</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'navbar.blade.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'sidebar.blade.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rumah Umum & Komersial
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rumah Umum & Komersial</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Anggaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
            
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                <option value="aceh">Aceh</option>
                <option value="sumut">Sumatera Utara</option>
                <option value="sumbar">Sumatera Barat</option>
                <option value="riau">Riau</option>
                <option value="jambi">Jambi</option>
                <option value="sumsel">Sumatera Selatan</option>
                <option value="bengkulu">Bengkulu</option>
                <option value="lampung">Lampung</option>
                <option value="kepbangbel">Kepulauan Bangka Belitung</option>
                <option value="kepri">Kepulauan Riau</option>
                <option value="dki">DKI Jakarta</option>
                <option value="jabar">Jawa Barat</option>
                <option value="jateng">Jawa Tengah</option>
                <option value="yogya">DI Yogyakarta</option>
                <option value="jatim">Jawa Timur</option>
                <option value="banten">Banten</option>
                <option value="bali">Bali</option>
                <option value="nustengbar">Nusa Tenggara Barat</option>
                <option value="nustengtim">Nusa Tenggara Timur</option>
                <option value="kalbar">Kalimantan Barat</option>
                <option value="kalteng">Kalimantan Tengah</option>
                <option value="kalsel">Kalimantan Selatan</option>
                <option value="kaltim">Kalimantan Timur</option>
                <option value="kalut">Kalimantan Utara</option>
                <option value="selut">Sulawesi Utara</option>
                <option value="sulteng">Sulawesi Tengah</option>
                <option value="sulsel">Sulawesi Selatan</option>
                <option value="sultengg">Sulawesi Tenggara</option>
                <option value="gorontalo">Gorontalo</option>
                <option value="sulbar">Sulawesi Barat</option>
                <option value="maluku">Maluku</option>
                <option value="malukuut">Maluku Utara</option>
                <option value="papua">Papua</option>
                <option value="papuabar">Papua Barat</option>
                </select>
                    
                    <label for="JumlahPagu">Total Anggaran</label>
                    <input type="number" class="form-control" id="JumlahPagu" placeholder="Input Jumlah Pagu">

                    <label for="JumlahUnit">Jumlah Unit</label>
                    <input type="number" class="form-control" id="JumlahUnit" placeholder="Input Jumlah Unit">

                    <label for="JumlahTower">Jumlah Tower</label>
                    <input type="number" class="form-control" id="JumlahTower" placeholder="Input Jumlah Tower">

                    <label for="JumlahTerhuni">Serah Terima</label>
                    <input type="number" class="form-control" id="JumlahTerhuni" placeholder="Input Jumlah Terhuni">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

            
            <!-- /.card -->

            <!-- general form elements -->
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2022 <a>Kementerian PUPR</a>.</strong> Magang
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
