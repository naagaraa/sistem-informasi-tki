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
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>
											Indofood
										</td>
										<td>Indonesia</td>
										<td>cikarang</td>
										<td>
											<a href="#" class="btn btn-primary">Edit</a>
											<a href="#" class="btn btn-primary">Delete</a>
										</td>
									</tr>
									<tr>
										<td>1</td>
										<td>
											Indofood
										</td>
										<td>Indonesia</td>
										<td>cikarang</td>
										<td>
											<a href="#" class="btn btn-primary">Edit</a>
											<a href="#" class="btn btn-primary">Delete</a href="#">
										</td>
									</tr>
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