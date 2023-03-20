<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PERFORMA | RUSUN</title>

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
            <h1>Rumah Swadaya
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rumah Swadaya</li>
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
                <h3 class="card-title">Rumah Swadaya</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="JumlahPagu">Jumlah Pagu</label>
                    <input type="number" class="form-control" id="JumlahPagu" placeholder="Input Jumlah Pagu">

                    <label for="JumlahTower">Jumlah Tower</label>
                    <input type="number" class="form-control" id="JumlahTower" placeholder="Input Jumlah Tower">

                    <label for="JumlahUnit">Jumlah Unit</label>
                    <input type="number" class="form-control" id="JumlahUnit" placeholder="Input Jumlah Unit">

                    <label for="JumlahTerhuni">Jumlah Terhuni</label>
                    <input type="number" class="form-control" id="JumlahTerhuni" placeholder="Input Jumlah Terhuni">

                    <label for="RealisasiKeuangan">Realisasi Keuangan</label>
                    <input type="name" class="form-control" id="JumlahKeuangan" placeholder="Input Jumlah Realisasi Keuangan">

                    <label for="RealisasiFisik">Realisasi Fisik</label>
                    <input type="name" class="form-control" id="RealisasiFisik" placeholder="Input Jumlah Realisasi Fisik">

                    <label for="StatusUpdate">Realisasi Status Update</label>
                    <input type="name" class="form-control" id="StatusUpdate" placeholder="Input Jumlah Realisasi Status">
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

          <div class="float-sm-right">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Penerima Manfaat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="JumlahPagu">Jumlah Pagu</label>
                    <input type="number" class="form-control" id="JumlahPagu" placeholder="Input Jumlah Pagu">

                    <label for="JumlahTower">Jumlah Tower</label>
                    <input type="number" class="form-control" id="JumlahTower" placeholder="Input Jumlah Tower">

                    <label for="JumlahUnit">Jumlah Unit</label>
                    <input type="number" class="form-control" id="JumlahUnit" placeholder="Input Jumlah Unit">

                    <label for="JumlahTerhuni">Jumlah Terhuni</label>
                    <input type="number" class="form-control" id="JumlahTerhuni" placeholder="Input Jumlah Terhuni">

                    <label for="RealisasiKeuangan">Realisasi Keuangan</label>
                    <input type="name" class="form-control" id="JumlahKeuangan" placeholder="Input Jumlah Realisasi Keuangan">

                    <label for="RealisasiFisik">Realisasi Fisik</label>
                    <input type="name" class="form-control" id="RealisasiFisik" placeholder="Input Jumlah Realisasi Fisik">

                    <label for="StatusUpdate">Realisasi Status Update</label>
                    <input type="name" class="form-control" id="StatusUpdate" placeholder="Input Jumlah Realisasi Status">
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
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Aset Rumah Swadaya</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="JumlahPagu">Total Aset</label>
                    <input type="number" class="form-control" id="JumlahPagu" placeholder="Input Jumlah Pagu">

                    <label for="JumlahTower">Serah Terima</label>
                    <input type="number" class="form-control" id="JumlahTower" placeholder="Input Jumlah Tower">

                    <label for="JumlahUnit">Sisa</label>
                    <input type="number" class="form-control" id="JumlahUnit" placeholder="Input Jumlah Unit">
                    <label for="JumlahPagu">Proses</label>
                    <input type="number" class="form-control" id="JumlahPagu" placeholder="Input Jumlah Pagu">

                    <label for="JumlahTower">Status</label>
                    <input type="date" class="form-control" id="JumlahTower" placeholder="Input Jumlah Tower">
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
          <div class="float-sm-right">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Status Penghunian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="JumlahPagu">Total Tower</label>
                    <input type="number" class="form-control" id="JumlahPagu" placeholder="Input Jumlah Pagu">

                    <label for="JumlahTower">Terhuni</label>
                    <input type="number" class="form-control" id="JumlahTower" placeholder="Input Jumlah Tower">

                    <label for="JumlahUnit">Sisa</label>
                    <input type="number" class="form-control" id="JumlahUnit" placeholder="Input Jumlah Unit">
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
          <!--/.col (right) -->
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
