<?= $this->extend('backend/app') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?php // $this->include("backend/components/pageheader") ?>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<?= session()->getFlashdata('error') ?>
			<?php if(session()->getFlashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					Data berhasil ditambahkan
				</div>
			<?php endif ?>
			<div class="row">
				<div class="col">
					<h1>Edit Loker Baru</h1>
					<p>Edit Informasi Loker</p>
				</div>
				<div class="col-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Loker</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="POST" action="<?= base_url("loker/edit") ?>" >
							<?= csrf_field() ?>
                     <input type="hidden" name="uniqid" value="<?= $loker->uniqid_loker ?>">
							<div class="card-body">
								<div class="form-group">
									<label for="namaposisi">posisi yang dibuka</label>
									<input name="posisi-loker" type="text" class="form-control" id="namaposisi" value="<?= $loker->nama_posisi ?>">
								</div>
								<div class="form-group">
									<label for="jobdesk_deskription">jobsdesk</label>
									<textarea name="jobsdesk-loker" type="text" class="form-control" id="jobdesk_deskription"><?= $loker->jobdesk_deskription ?></textarea>
								</div>
								<div class="form-group">
									<label for="kualifikasi_deskription">kualifikasi</label>
									<textarea name="kualifikasi-loker" type="text" class="form-control" id="kualifikasi_deskription"><?= $loker->kualifikasi_deskription ?></textarea>
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