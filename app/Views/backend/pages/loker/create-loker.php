<?= $this->extend('backend/app') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?php // $this->include("backend/components/pageheader") ?>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col">
					<h1>Buat Loker Baru</h1>
					<p>Tambah Informasi Loker Baru</p>
				</div>
				<div class="col-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Loker</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form>
							<div class="card-body">
								<div class="form-group">
									<label for="namaposisi">posisi yang dibuka</label>
									<input type="text" class="form-control" id="namaposisi" placeholder="posisi yang dibuka">
								</div>
								<div class="form-group">
									<select class="custom-select">
										<option selected>Nama Perusahaan</option>
										<option value="google">Google</option>
										<option value="alibaba">Alibaba</option>
										<option value="aws">AWS</option>
									</select>
								</div>
								<div class="form-group">
									<select class="custom-select">
										<option selected>Negara</option>
										<option value="Jepang">Jepang</option>
										<option value="singapore">singapore</option>
										<option value="germany">germany</option>
									</select>
								</div>
								<div class="form-group">
									<label for="jobdesk_deskription">jobsdesk</label>
									<textarea type="text" class="form-control" id="jobdesk_deskription">jobdesk deskription</textarea>
								</div>
								<div class="form-group">
									<label for="kualifikasi_deskription">kualifikasi</label>
									<textarea type="text" class="form-control" id="kualifikasi_deskription">kualifikasi deskription</textarea>
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<?= $this->endSection() ?>