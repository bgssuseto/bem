<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center">
		<div class="container d-flex align-items-center">

			<div class="logo mr-auto">
				<h1 class="text-light"><a href="index.php"><img src="<?= base_url() ?>assets/img/bemft.png"><span> BEM FT</span></a></h1>
			</div>

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="active"><a href="<?= base_url() ?>">Beranda</a></li>
					<li><a href="#about">Tentang Kami</a></li>
					<li><a href="#departemen">Departemen</a></li>
					<li><a href="#anggota">Anggota</a></li>
					<li><a href="#contact">Hubungi Kami</a></li>
					<li><a href="sosmed">Temukan Kami</a></li>
				</ul>
			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">

					<h1 data-aos="fade-up"><?= $row['judul'] ?></h1>
					<h2 data-aos="fade-up" data-aos-delay="400"><?= $row['slide'] ?></h2>
					<div data-aos="fade-up" data-aos-delay="800">
						<a href="<?= base_url() ?>" class="btn-get-started scrollto">Mulai Sekarang !</a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
					<img src="<?= base_url('./assets/img/slide/') . $row['gambar']  ?> " class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients clients">
			<div class="container">

				<div class="row">

					<div class="col-lg-2 col-md-4 col-6">
						<a href="http://himapro-ti.umk.ac.id/"><img src="<?= base_url() ?>assets/img/clients/TI.png" class="img-fluid" alt="" data-aos="zoom-in"></a>
					</div>

					<div class="col-lg-2 col-md-4 col-6">
						<a href="https://si.umk.ac.id/"><img src="<?= base_url() ?>assets/img/clients/SI.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100"></a>
					</div>

					<div class="col-lg-2 col-md-4 col-6">
						<a href="https://elektro.umk.ac.id/"><img src="<?= base_url() ?>assets/img/clients/TE.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200"></a>
					</div>

					<div class="col-lg-2 col-md-4 col-6">
						<a href="https://tm.umk.ac.id/"><img src="<?= base_url() ?>assets/img/clients/TM.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300"></a>
					</div>

					<div class="col-lg-2 col-md-4 col-6">
						<a href="https://industri.umk.ac.id/"><img src="<?= base_url() ?>assets/img/clients/TIND.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400"></a>
					</div>

					<div class="col-lg-2 col-md-4 col-6">
						<a href="#"><img src="<?= base_url() ?>assets/img/clients/OBENG.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500"></a>
					</div>

				</div>

			</div>
		</section><!-- End Clients Section -->

		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container">

				<div class="section-title" data-aos="fade-up">
					<h2>Tentang Kami</h2>
				</div>

				<div class="row content">
					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
						<center><img src="<?= base_url() ?>assets/img/kabinet.png" class="img-fluid " alt=""></center>
						<p></p>
						<h5 align="center">Kabinet Agni Prasanti</h5>
						</br>
						<p align="justify">
							Badan Eksekutif Mahasiswa (BEM) Fakultas Teknik Univeritas Muria Kudus merupakan lembaga tinggi kemahasiswaan di tingkat Fakultas Teknik Universitas Muria Kudus, yang bertanggungjawab dalam menjalankan fungsi pemerintahan mahasiswa di Fakultas Teknik Universitas Muria Kudus. diperiode 2019 / 2020 ini kabinet BEM FT UMK adalah "AGNI PRASANTI" yang berarti api kebaikan.
						</p>

					</div>
					<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
						<h1> Visi </h1>
						<p align="justify">
							Terwujudnya keluarga mahasiswa fakultas teknik yang bersinergis dan harmonis dalam mewujudkan inovasi dan prestasi
						</p>
						<h1> Misi </h1>
						<ul align="justify">
							<li><i class="ri-check-double-line"></i> Membangun internal yang aktif, profit dan berintegritas tinggi supaya terwujudkan Tri Dharma perguruan tinggi</li>
							<li><i class="ri-check-double-line"></i> Meningkatkan hubungan dan koordinasi dengan Organisasi Mahasiswa (ORMAWA) ditingkat Fakultas Teknik maupun Universitas</li>
							<li><i class="ri-check-double-line"></i> Mengembangkan kreativitas dan bakat minat mahasiswa Fakultas Teknik guna mengoptimalkan prestasi mahasiswa Fakultas Teknik UMK dibidang akademik maupun non-akademik</li>
						</ul>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- ======= Features Section ======= -->
		<section id="departemen" class="features">
			<div class="container">

				<div class="section-title" data-aos="fade-up">
					<h2>Departemen</h2>
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="300">
					<div class="col-lg-4 col-md-4" style="padding-bottom: 10px;">
						<div class="icon-box">
							<img src="assets/img/departemen/psdm.png" width="56px">
							<h3 style="margin-left: 10px;"><a href="">PSDM</a></h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="icon-box">
							<img src="assets/img/departemen/sosmaspol.png" height="56px" width="56px">
							<h3 style="margin-left: 10px;"><a href="">SOSMASPOL</a></h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="icon-box">
							<img src="assets/img/departemen/ristek.png" width="56px">
							<h3 style="margin-left: 10px;"><a href="">RISTEK</a></h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="icon-box">
							<img src="assets/img/departemen/pora.png" width="56px">
							<h3 style="margin-left: 10px;"><a href="">PORA</a></h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="padding-top: -7px;">
						<div class="icon-box">
							<img src="assets/img/departemen/medinfo.png" width="56px">
							<h3 style="margin-left: 10px;"><a href="">MEDINFO</a></h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="icon-box">
							<img src="assets/img/departemen/hublu.png" width="56px">
							<h3 style="margin-left: 10px;"><a href="">HUBLU</a></h3>
						</div>
					</div>


				</div>

			</div>
		</section><!-- End Features Section -->
		<!-- ======= Team Section ======= -->
		<section id="anggota" class="team section-bg">
			<div class="container">

				<div class="section-title" data-aos="fade-up">
					<h2>Anggota</h2>
				</div>
				<div class="row team-container" data-aos="fade-up" data-aos-delay="400">

					<?php
					foreach ($anggota->result_array() as $row) { ?>
						<div class="col-lg-3 col-md-6 d-flex align-items-stretch portfolio-item filter-app">
							<div class="member">
								<div class="member-img">
									<img src="<?= base_url('assets/img/team/') . $row['gambar'] ?>" class="img-fluid" alt="">
									<div class="social">
										<a href="<?= $row['tw'] ?>"><i class="icofont-twitter"></i></a>
										<a href="<?= $row['fb'] ?>"><i class="icofont-facebook"></i></a>
										<a href="<?= $row['instagram'] ?>"><i class="icofont-instagram"></i></a>
										<a href="<?= $row['linkedin'] ?>"><i class="icofont-linkedin"></i></a>
									</div>
								</div>
								<div class="member-info">
									<span><?= $row['jabatan']; ?></span>
									<h4><?= $row['nama'] ?></h4>
									<span><?= $row['prodi'] ?></span>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>

			</div>
		</section><!-- End Team Section -->
		<!-- ======= More Services Section ======= -->
		<section id="more-services" class="more-services">
			<div class="container">

				<div class="section-title" data-aos="fade-up">
					<h2 class="text-danger">Berita!</h2>
				</div>

				<div class="row">

					<?php
					foreach ($berita as $result_berita) : ?>

						<div class="col-md-6 mb-4 d-flex align-items-stretch">
							<div class="card" style='background-image: url("adm/upload/berita/brt<?= $result_berita['gambar'] ?>");' data-aos="fade-up" data-aos-delay="100">
								<div class="card-body">
									<h5 class="card-title"><a href=""><?= $result_berita['judul'] ?></a></h5>
									<p class="card-text"><?= substr($result_berita['isi'], 0, 85) ?>...</p>
									<div class="read-more text-right"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
								</div>
							</div>
						</div>

					<?php endforeach ?>

				</div>
		</section><!-- End More Services Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title" data-aos="fade-up">
					<h2>Hubungi Kami</h2>
				</div>

				<div class="row">

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
						<div class="contact-about">
							<h3>BEM FT UMK</h3>
							<p>Badan Eksekutif Mahasiswa (BEM) Fakultas Teknik Univeritas Muria Kudus merupakan lembaga tinggi kemahasiswaan di tingkat Fakultas Teknik Universitas Muria Kudus, yang bertanggungjawab dalam menjalankan fungsi pemerintahan mahasiswa di Fakultas Teknik Universitas Muria Kudus. </p>
							<div class="social-links">
								<a href="https://www.instagram.com/bemft_umk/" class="instagram"><i class="icofont-instagram"></i></a>
								<a href="https://www.youtube.com/channel/UCy-WFx0dvmyUi1WZ2TBvqhA" class="youtube"><i class="icofont-youtube"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
						<div class="info">
							<div>
								<i class="fas fa-map-marker-alt"></i>
								<p>Gondangmanis kec. Bae Kab. Kudus, Jawa Tengah, Indonesia.</p>
							</div>

							<div>
								<i class="fas fa-envelope"></i>
								<p>bemteknik@umk.ac.id</p>
							</div>

							<div>
								<i class="fas fa-globe-asia"></i>
								<p>bemteknik.umk.ac.id</p>
							</div>

						</div>
					</div>

					<div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
						<form class="php-email-form" method="POST" action="<?= base_url('Admin/inbox') ?>">
							<?= $this->session->flashdata('message') ?>
							<div class="form-group">
								<input type="text" name="nama" class="form-control" id="name" required placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validate"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" required placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validate"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subjek" id="subject" required placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validate"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="pesan" rows="5" data-rule="required" required data-msg="Please write something for us" placeholder="Pesan"></textarea>
								<div class="validate"></div>
							</div>
							<div class="mb-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>
							</div>
							<div class="text-center"><button type="submit">Kirim Pesan</button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

</body>