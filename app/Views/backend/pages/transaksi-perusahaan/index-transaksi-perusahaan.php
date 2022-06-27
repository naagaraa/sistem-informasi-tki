<?=$this->extend('backend/app')?>

<?=$this->section('content')?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?=$this->include("backend/components/pageheader")?>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col">
					<h1>Transaksi Perusahaan</h1>
					<p>this is page for transaction Perusahaan</p>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Tabel Transaction Perusahaan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Perusahaan</th>
										<th>negara Perusahaan</th>
										<th>action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>google
										</td>
										<td>singapore</td>
										<td>
                                 <a href="#" class="btn btn-primary">Detail transaction</a>
                              </td>
									</tr>
									<tr>
										<td>1.</td>
										<td>google
										</td>
										<td>singapore</td>
										<td>
                                 <a href="#" class="btn btn-primary">Detail transaction</a>
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