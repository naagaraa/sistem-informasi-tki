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
					<h1>Transaksi users</h1>
					<p>this is page for transaction for users</p>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Tabel Transaction Users</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama TKI</th>
										<th>Perusahaan</th>
										<th>Loker</th>
										<th>action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>google
										</td>
										<td>singapore</td>
										<td>backend dev</td>
										<td>
                                 <a href="<?= base_url('/transaksi/users/0001') ?>" class="btn btn-primary">Detail transaction</a>
                              </td>
									</tr>
									<tr>
										<td>2.</td>
										<td>google
										</td>
										<td>singapore</td>
										<td>front end dev</td>
										<td>
                                 <a href="<?= base_url('/transaksi/users/0002') ?>" class="btn btn-primary">Detail transaction</a>
                              </td>
									</tr>
							</table>
						</div>
						<!-- /.card-body -->
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