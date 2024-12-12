<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Alternatif</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Update Kriteria</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Form Update Alternatif</li>
              </ol>
            </div>
          </div>
        </div>
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
                  <h3 class="card-title">Form Update Alternatif</h3>
                </div>
                <!-- form start -->
                <form action="<?= base_url('/home/updatedataalter/' . $alternatif->id) ?>" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="kode_alternatif">Kode Alternatif</label>
                      <input type="text" class="form-control" id="kode_alternatif" name="kode_alternatif"
                        value="<?= $alternatif->kode_alternatif ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="nama_alternatif">Nama Alternatif</label>
                      <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif"
                        value="<?= $alternatif->nama_alternatif ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="C1">Nilai Raport (C1)</label>
                      <input type="number" step="0.01" class="form-control" id="C1" name="C1"
                      value="<?= $alternatif->C1 ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="C2">Hafalan Quran (C2)</label>
                      <input type="number" step="0.01" class="form-control" id="C2" name="C2"
                      value="<?= $alternatif->C2 ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="C3">Hafalan Hadis (C3)</label>
                      <input type="number" step="0.01" class="form-control" id="C3" name="C3"
                      value="<?= $alternatif->C3 ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="C4">Kehadiran (C4)</label>
                      <input type="number" step="0.01" class="form-control" id="C4" name="C4"
                      value="<?= $alternatif->C4 ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="C5">Akhlak (C5)</label>
                      <input type="number" step="0.01" class="form-control" id="C5" name="C5"
                      value="<?= $alternatif->C5 ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="C6">Bahasa (C6)</label>
                      <input type="number" step="0.01" class="form-control" id="C6" name="C6"
                      value="<?= $alternatif->C6 ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="C7">Ekstrakulikuler (C7)</label>
                      <input type="number" step="0.01" class="form-control" id="C7" name="C7"
                      value="<?= $alternatif->C7 ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="C8">Pengabdian (C8)</label>
                      <input type="number" step="0.01" class="form-control" id="C8" name="C8"
                      value="<?= $alternatif->C8 ?>" required>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div>
      </section>
      <!-- /.content -->
    </div>

    <aside class="control-sidebar control-sidebar-dark"></aside>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
</body>

</html>
