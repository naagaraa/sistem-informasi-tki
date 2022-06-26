<?=$this->extend('backend/app')?>

<?=$this->section('content')?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?php //$this->include("backend/components/pageheader")?>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col">
					<h1>Tambah User</h1>
					<p>Tambah User Baru</p>
				</div>
				<div class="col-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Tambah Users</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form>
							<div class="card-body">
								<div class="form-group">
									<label for="nama-user">nama</label>
									<input type="text" class="form-control" id="nama-user" placeholder="masukan nama">
								</div>
								<div class="form-group">
									<label for="email-user">email</label>
									<input type="email" class="form-control" id="email-user" placeholder="email">
								</div>
								<div class="form-group">
									<label for="handphone-user">handphone</label>
									<input type="number" class="form-control" id="handphone-user" placeholder="masukan handphone">
								</div>
								<div class="form-group">
									<label for="alamat-user">alamat</label>
									<textarea type="text" class="form-control" id="alamat-user" placeholder="masukan alamat">masukan alamat user</textarea>
								</div>
								<div class="form-group">
									<select class="custom-select">
										<option selected>akses</option>
										<option value="1">TKI</option>
										<option value="2">Pengawai</option>
									</select>
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
<?=$this->endSection()?>