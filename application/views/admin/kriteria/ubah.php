<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_front/header.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_front/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_front/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_front/breadcrumb.php") ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/kriteria/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/kriteria/ubah') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_kriteria" value="<?php echo $kriteria->id_kriteria ?>" />

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" value="<?php echo $kriteria->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Ket</label>
								<input class="form-control <?php echo form_error('ket') ? 'is-invalid':'' ?>"
								 type="text" name="ket" min="0" placeholder="Keterangan" value="<?php echo $kriteria->ket ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ket') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_front/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_front/scrolltop.php") ?>

		<?php $this->load->view("admin/_front/js.php") ?>

</body>

</html>