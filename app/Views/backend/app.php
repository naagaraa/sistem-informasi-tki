
<?=$this->include('backend/layout/header')?>
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="page d-flex flex-row flex-column-fluid">
		<!--begin::Aside-->
		<?=$this->include("backend/layout/aside")?>
		<!--end::Aside-->
		<!--begin::Wrapper-->
		<div style="padding-top: 30px !important" class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
			<!--begin::Header-->
			<?=$this->include("backend/components/header")?>
			<!--end::Header-->
					<?=$this->renderSection('content')?>
					<!-- begin:footer -->
					<?=$this->include("backend/components/footer")?>
					<!-- end:footer -->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::Root-->
<?=$this->include('backend/layout/footer')?>
