<?=$this->extend('backend/app')?>

<?=$this->section('content')?>
    <!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<?=$this->include("backend/components/toolbar")?>
	<!--end::Toolbar-->
	<div  id="kt_content_container" class="container">
        <div class="row pt-5 mt-5">
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header my-auto mx-auto ">
                        <h1 class="pt-5">Index Laporan</h1>
                    </div>
                    <div class="card-body mx-5">
                       <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Content-->
<?=$this->endSection()?>