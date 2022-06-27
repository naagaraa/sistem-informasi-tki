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
									<tr>
										<td>1</td>
										<td>Budi
										</td>
										<td>budi@gmail.com</td>
										<td>087767132</td>
										<td>tki</td>
										<td>20 juni 2020</td>
										<td>
											<a href="<?= base_url("users/edit/0001") ?>" class="btn btn-primary">
												edit
											</a>
											<a href="#" class="btn btn-danger">
												delete
											</a>
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