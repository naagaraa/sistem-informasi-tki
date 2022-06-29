<?= $this->extend('backend/app') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?php //$this->include("backend/components/pageheader")
	?>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col">
					<h1>Loker</h1>
					<p>informasi lowongan kerja</p>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">DataTable with default features</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>posisi</th>
										<th>Perusahaan</th>
										<th>Lokasi</th>
										<th>status</th>
										<th>update at</th>
										<th>action</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($loker)) : ?>
										<?php $number = 1; ?>
										<?php foreach ($loker as $key => $value) : ?>
											<tr>
												<td><?= $number++ ?></td>
												<td><?= $value->nama_posisi ?></td>
												<td><?= $value->nama_perusahaan ?></td>
												<td><?= $value->negara_perusahaan ?></td>
												<td><?= $value->status_loker == 1 ? "open" : "close" ?></td>
												<td><?=  substr( $value->create_at,0,10) ?></td>
												<td>
													<?php if(session("role") == 1):?>
													<a href="#" class="btn btn-primary">Daftar</a>
													<?php endif;?>
													<?php if(session("role") == 2): ?>
													<a href="#" class="btn btn-danger">close</a>
													<a href="<?= base_url("loker/show/{$value->uniqid_loker}") ?>" class="btn btn-primary">edit</a>
													<a href="#" class="btn btn-warning">delete</a>
													<?php endif;?>
												</td>
											</tr>
										<?php endforeach; ?>
									<?php else : ?>
										<tr>
											<td>No Data</td>
											<td>No Data</td>
											<td>No Data</td>
											<td>No Data</td>
											<td>No Data</td>
											<td>No Data</td>
											<td>
												No Data
											</td>
										</tr>
									<?php endif; ?>
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
<?= $this->endSection() ?>