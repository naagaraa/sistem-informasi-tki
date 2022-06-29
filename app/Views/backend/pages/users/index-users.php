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
					<h1>Users</h1>
					<p>informasi user</p>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">table users</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>nama</th>
										<th>email</th>
										<th>Handphone</th>
										<th>role</th>
										<th>update at</th>
										<th>action</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($users)) : ?>
										<?php $number = 1; ?>
										<?php foreach ($users as $key => $value) : ?>
										<tr>
											<td><?= $number++; ?></td>
											<td><?= $value->nama_user == "" ? "-" : $value->nama_user ?></td>
											<td><?= $value->email_user ?></td>
											<td><?= $value->handphone_user == "" ? "-" : $value->handphone_user ?></td>
											<td><?= $value->role_user  == 1 ? "TKI" : "Pegawai" ?></td>
											<td><?= substr($value->update_at,0,10) ?></td>
											<td>
												<a href="<?= base_url("users/show/{$value->uniqid_user}") ?>" class="btn btn-primary">
													edit
												</a>
												<!-- <a href="<?= base_url("users/delete/{$value->uniqid_user}") ?>" class="btn btn-danger">
													delete
												</a> -->
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
<?=$this->endSection()?>