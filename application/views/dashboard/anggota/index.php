 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Data Anggota</h1>


     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
         </div>
         <div class="card-body">
             <a href="<?= base_url('Admin/aksi_anggota') ?>" class="btn btn-primary mb-4">Tambah Data</a>
             <?= $this->session->flashdata('message') ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Foto</th>
                             <th>Nama</th>
                             <th>Prodi</th>
                             <th>Departemen</th>
                             <th>Jabatan</th>
                             <th style="width:65px;">Aksi</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                             <th>Foto</th>
                             <th>Nama</th>
                             <th>Prodi</th>
                             <th>Departemen</th>
                             <th>Jabatan</th>
                             <th>Aksi</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         <?php foreach ($p_anggota->result_array() as $row) : ?>
                             <tr>
                                 <td><img src="<?= base_url('assets/img/team/') . $row['gambar']; ?>" style="width: 90px; height:auto;" alt=""></td>
                                 <td><?= $row['nama']; ?></td>
                                 <td><?= $row['prodi']; ?></td>
                                 <td><?= $row['departemen']; ?></td>
                                 <td><?= $row['jabatan']; ?></td>
                                 <td>
                                     <a href="<?= base_url('Admin/edit_anggota/' . $row['id']) ?>" class="btn btn-info btn-sm"><i class="fas fa-user-edit"></i></a>
                                     <a href="<?= base_url('Admin/hapus_anggota/' . $row['id']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                 </td>
                             </tr>
                         <?php endforeach; ?>

                     </tbody>
                 </table>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->