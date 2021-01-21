<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Form Data Anggota</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
		</div>
		<div class="card-body">
			<h5 style="margin-left: 12px; padding-bottom:10px;">Silahkan Isi Data Anggota BEM</h5>
			<?= $this->session->flashdata('message'); ?>
			<form action="<?= base_url('admin/aksi_anggota') ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group col-md-6">
					<label for="nama">Nama</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama...">
					<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group col-md-6">
					<label for="nama">Jabatan</label>
					<input type="text" name="jabatan" class="form-control" placeholder="Jabatan...">
					<?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>') ?>
				</div>

				<div class="form-group form-group col-md-6">
					<label for="bulan">Prodi</label>
					<select id="bulan" name="prodi" class="form-control">
						<option value="" readonly;>- Silahkan Pilih -</option>
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Teknik Industri">Teknik Industri</option>
						<option value="Sistem informasi">Sistem informasi</option>
						<option value="Teknik Mesin">Teknik Mesin</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
					</select>
					<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
				</div>

				<div class="form-group form-group col-md-6">
					<label for="bulan">Departemen</label>
					<input type="text" name="jabatan" class="form-control" placeholder="Departemen...">
					<div class="form-group pt-3" style="padding-bottom:10px;">
						<label for="exampleFormControlFile1">Foto Diri</label>
						<input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1">
						<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
				</div>

				<button type="submit" class="btn btn-primary" style="margin-left: 12px; margin-bottom: 270px;">Kirim</button>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
