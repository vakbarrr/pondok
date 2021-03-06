<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Data Siswa - SPP Pondok</title>
	<!-- General CSS Files -->
	<link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>

</head>

<body>

	<?php $this->load->view('admin/primer/sidebar') ?>

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="card">
						<div class="card-body">
							<h2 class="card-title" style="color: black;">Management Data Siswa Pondok</h2>
							<a href="<?= base_url('admin/registration') ?>" class="btn btn-primary">Tambah
								Data Siswa ⭢ </a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="bg-white p-4"
								style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
								<div class="table-responsive">
									<table id="example" class="table align-items-center table-flush">
										<thead class="thead-light">
											<tr class="text-center">
												<th scope="col">ID</th>
												<th scope="col">Nama Siswa</th>
												<th scope="col">Email</th>
												<th scope="col">Gambar</th>
												<th scope="col">Akun Aktif *</th>
												<th scope="col">Detail</th>
												<th scope="col">Pembayaran</th>
												<th scope="col">Option</th>
											</tr>
										</thead>

										<tbody>
											<?php

                                foreach ($user as $u) {
                                    ?>
											<tr class="text-center">

												<th scope="row">
													<?php echo $u->id ?>
												</th>

												<td>
													<?php echo $u->nama ?>
												</td>

												<td>
													<?php echo $u->email ?>
												</td>

												<td>
													<img height="20px"
														src="<?= base_url() . 'assets/profile_picture/' . $u->image; ?>">
												</td>

												<td>
													<?php echo $u->is_active ?>
												</td>

												<td class="text-center">
													<a href="<?php echo site_url('admin/detail_siswa/' . $u->id); ?>"
														class="btn btn-primary">Detail ⭢</a>
												</td>

												<td class="text-center">
													<a href="<?php echo site_url('admin/pembayaran_siswa/' . $u->id); ?>"
														class="btn btn-primary">Pembayaran ⭢</a>
												</td>

												<td class="text-center">
													<a href="<?php echo site_url('admin/update_siswa/' . $u->id); ?>"
														class="btn btn-info">Update ⭢</a>

													<a href="<?php echo site_url('admin/delete_siswa/' . $u->id); ?>"
														class="btn btn-danger remove">Delete ✖</a>
												</td>

											</tr>
											<?php
                                }
                                ?>
										</tbody>
									</table>
									<p class="small font-weight-bold">* Angka 1 menunjukan akun telah aktif sedangkan
										Angka
										0 menunjukan akun
										belum
										aktif</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- End Main Content -->

	<!-- Start Sweetalert -->

	<?php if ($this->session->flashdata('success-edit')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Data Siswa Telah Dirubah!',
			text: 'Selamat data berubah!',
			showConfirmButton: false,
			timer: 2500
		})

	</script>
	<?php endif; ?>

	<?php if ($this->session->flashdata('user-delete')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Data Siswa Telah Dihapus!',
			text: 'Selamat data telah Dihapus!',
			showConfirmButton: false,
			timer: 2500
		})

	</script>
	<?php endif; ?>

	<!-- End Sweetalert -->

	<!-- Start Footer -->
	<footer class="main-footer">
		<div class="text-center">
			Copyright &copy; 2020 <div class="bullet"></div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
	<!-- JS Libraies -->
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#example').DataTable();
		});

	</script>
	<!-- Template JS File -->
	<script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
	<script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>
</body>

</html>
