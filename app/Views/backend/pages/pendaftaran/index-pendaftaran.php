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
					<h1>TKI terdaftar</h1>
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
										<th>Nama TKI</th>
										<th>update at</th>
										<th>action</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($pendaftaran)) : ?>
										<?php $number = 1; ?>
										<?php foreach ($pendaftaran as $key => $value) : ?>
											<tr>
												<td><?= $number++ ?></td>
												<td><?= $value->nama_user ?></td>
												<td><?=  substr( $value->create_at,0,10) ?></td>
												<td>
													<?php if(session("role") == 2): ?>
													<a href="<?= base_url("pendaftaran/delete/{$value->uniqid_tki_terdaftar}") ?>" class="btn btn-warning">delete</a>
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