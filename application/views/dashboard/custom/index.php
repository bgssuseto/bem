<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-1 text-gray-800">Customize Website</h1>
	<p class="mb-4">Perbaharui landing page website BEM dengan menggunakan menu kustomisasi ini agar selalu update</p>

	<!-- Content Row -->
	<div class="row">

		<!-- Border Left Utilities -->
		<div class="col-lg-5">

			<div class="card mb-4 py-3 border-left-primary">
				<div class="card-body">
					<h5 style="margin-left: 12px; padding-bottom:10px;">Perbaharui Sekarang !</h5>
					<?= $this->session->flashdata('message'); ?>

					<form action="<?= base_url('Admin/aksi_anggota') ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group col-md-7">
							<label for="nama">Judul</label>
							<input type="text" name="nama" class="form-control" placeholder="Judul...">
							<?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group col-md-7">
							<label for="nama">Konten</label>
							<textarea name="slide" id="" cols="30" rows="5" placeholder="Isi Konten....."></textarea>
							<?= form_error('konten', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<label for="exampleFormControlFile1">Foto Jumbotron</label>
						<input type="file" class="form-control-file" name="gambar" id="gambar" size="30" required>
						<?= form_error('jumbotron', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
			</div>

			<button type="submit" class="btn btn-primary" style="margin-left: 12px; margin-bottom: 270px;">Unggah</button>
			</form>

		</div>
	</div>



</div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
