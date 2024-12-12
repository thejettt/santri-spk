<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SPK Santri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Jenis Usaha</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nama Jenis Usaha UMKM</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
              <p>
              <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url('home/formtambah'); ?>'">Tambah Data UMKM </button>
              </p>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Usaha UMKM</th>
                    <th>Nama Pimpinan</th>
                    <th>Jalan</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Jenis Usaha</th>
                    
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php
                  $no=0;
                  foreach($dataMb as $row):
                    $no++;
                    ?>
                <tr>
                    <th> <?= $no; ?></th>
                    <td><?= $row->nama_umkm; ?></td>
                    <td><?= $row->nama_pimpinan; ?></td>
                    <td><?= $row->jalan; ?></td>
                    <td><?= $row->desa; ?></td>
                    <td><?= $row->kecamatan; ?></td>
                    <td><?= $row->jenis_usaha; ?></td>
                    
                    <td>
                    <a href="/home/formeditmbl/<?=$row->id;?>" class="badge badge-primary">Edit</a>  
                    <a href="/home/deletembl/<?=$row->id;?>" class="badge badge-danger">hps</a>
                  <form action="/home/deletembl/<?=$row->id; ?>" method="post">
                  <?=csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                  </form>

                  </td>
                  
                  </tr>

                  <?php
                  endforeach;
                  ?>
                 
                  </tbody>
                 
                </table>
                </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    
    </section>
    <!-- /.content -->
  </div>