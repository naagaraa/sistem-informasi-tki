<?=$this->extend('backend/app')?>

<?=$this->section('content')?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?php //$this->include("backend/components/pageheader")?>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<?= session()->getFlashdata('error') ?>
			<?php if(session()->getFlashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					data berhasil ditambahkan
				</div>
			<?php endif ?>
			<div class="row">
				<div class="col">
					<h1>Tambah Data Perusahaan</h1>
					<p>tambah data perusahaan baru</p>
				</div>
			</div>
			<div class="col-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Tambah</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="POST" action="<?= base_url("perusahaan/create") ?>">
						<?= csrf_field() ?>
							<div class="card-body">
								<div class="form-group">
									<label for="perusahaan">Nama Perusahaan</label>
									<input name="nama-perusahaan" type="text" class="form-control" id="perusahaan" placeholder="Nama Perusahaan">
								</div>
								<div class="form-group">
									<label for="alamatperusahaan">Alamat</label>
									<textarea name="alamat-perusahaan" type="text" class="form-control" id="alamatperusahaan">alamat</textarea>
								</div>
								<div class="form-group">
									<label for="negaraperusahaan">Nama negara</label>
									<input name="nama-negara" type="text" class="form-control" id="negaraperusahaan" placeholder="Nama Negara">
								</div>
								<div class="form-group">
									<label for="alamatperusahaan">Deskripsi Perusahaan</label>
									<textarea name="deskripsi-perusahaan" type="text" class="form-control" id="alamatperusahaan">Deskripsi Perusahaan</textarea>
								</div>
								<div class="form-group">
									<label for="saldoperusahaan">Saldo Perusahaan</label>
									<br>
									<span>saldo yang akan disediakan perusahaan 3jt/1 karyawan</span>
									<input name="saldo-perusahaan" type="number" class="form-control" id="saldoperusahaan" placeholder="30000">
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
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<?=$this->endSection()?>