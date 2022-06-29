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
					<h1>Perusahaan</h1>
					<p>informasi mengenai Perusahaan</p>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">tabel Perusahaan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Perusahaan</th>
										<th>Negara</th>
										<th>Alamat</th>
										<?php if(session("role") == 2): ?>
										<th>Action</th>
										<?php endif;?>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($perusahaan)): ?>
									<?php $number = 1;?>
									<?php foreach ($perusahaan as $key => $value):?>
									<tr>
										<td><?= $number++ ?></td>
										<td><?= $value->nama_perusahaan ?></td>
										<td><?= $value->negara_perusahaan ?></td>
										<td><?= $value->alamat_perusahaan ?></td>
										<?php if(session("role") == 2): ?>
										<td>
											<a href="#" class="btn btn-primary">Detail</a>
											<a href="<?= base_url("perusahaan/show/{$value->uniqid_perusahaan}") ?>" class="btn btn-warning">Edit</a>
											<a href="<?= base_url("perusahaan/delete/{$value->uniqid_perusahaan}") ?>" class="btn btn-danger">Delete</a>
										</td>
										<?php endif;?>
									</tr>
									<?php endforeach; ?>
									<?php else : ?>
										<tr>
											<td>No Data</td>
											<td>No Data</td>
											<td>No Data</td>
											<td>No Data</td>
											<td>No Data</td>
										</tr>
									<?php endif;?>
								</tbody>
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