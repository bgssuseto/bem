<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Form Update Data Anggota</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Update Data Anggota</h6>
		</div>
		<div class="card-body" style="height: 750px;">
			<h5 style="margin-left: 12px; padding-bottom:10px;">Perbaharui Sekarang !</h5>
			<?= $this->session->flashdata('message'); ?>

			<form action="<?= base_url('Admin/create_slide') ?>" method="POST" enctype="multipart/form-data">

				<div class="form-group col-md-7">
					<label for="nama">Judul</label>
					<input type="text" name="judul" class="form-control" placeholder="Judul...">
					<?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group col-md-7">
					<label for="nama">Konten</label>
					<textarea class="form-control" name="slide" aria-label="With textarea"></textarea>

					<?= form_error('konten', '<small class="text-danger pl-3">', '</small>') ?>
				</div>

				<div class="form-group col-md">
					<label for="exampleFormControlFile1">Foto Jumbotron</label>
					<input type="file" class="form-control-file" name="gambar" id="gambar" size="30" required>
					<?= form_error('jumbotron', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group col-md" style="margin-top:25px;margin-bottom:-200px;">
					<button type=" submit" class="btn btn-primary">Unggah</button>
				</div>
				<div class="table-responsive" style="margin-top: 240px;">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Foto</th>
								<th>Judul</th>
								<th>Isi Konten</th>
								<th style="width:65px;">Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Foto</th>
								<th>Judul</th>
								<th>Isi Konten</th>
								<th style="width:65px;">Aksi</th>
							</tr>
						</tfoot>
						<tbody>

							<tr>
								<td><img src="<?= base_url('assets/img/slide/') . $row['gambar']; ?>" style="width: 90px; height:auto;" alt=""></td>
								<td><?= $row['judul']; ?></td>
								<td><?= $row['slide']; ?></td>

								<td>

									<a href="<?= base_url('Admin/hapus_custom/' . $row['id']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>


						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->