 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Pesan Masuk</h1>


     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Pesan Masuk</h6>
         </div>
         <div class="card-body">
             <a href="<?= base_url('Admin/delpesan') ?>" class="btn btn-danger mb-4">Hapus Semua</a>
             <?= $this->session->flashdata('message') ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Nama</th>
                             <th>Email</th>
                             <th>Subjek</th>
                             <th>Pesan</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                             <th>Nama</th>
                             <th>Email</th>
                             <th>Subjek</th>
                             <th>Pesan</th>
                             <th>Aksi</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         <?php foreach ($pesan as $p) : ?>
                             <tr>

                                 <td><?= $p['nama']; ?></td>
                                 <td><?= $p['email']; ?></td>
                                 <td><?= $p['subjek']; ?></td>
                                 <td><?= $p['pesan']; ?></td>
                                 <td>

                                     <a href="<?= base_url('Admin/hapus_pesan/' . $p['id_pesan']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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