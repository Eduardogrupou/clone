<?php

include('database.php');
include("header.php");
include("sidebar.php");


$query="SELECT * from banners";
$recs=db::getRecords($query);


?>

<html>
<head>
	<style>
	.dtHorizontalExampleWrapper {
		max-width: 600px;
		margin: 0 auto;
	}
	#dtHorizontalExample th, td {
		white-space: nowrap;
	}

	table.dataTable thead .sorting:after,
	table.dataTable thead .sorting:before,
	table.dataTable thead .sorting_asc:after,
	table.dataTable thead .sorting_asc:before,
	table.dataTable thead .sorting_asc_disabled:after,
	table.dataTable thead .sorting_asc_disabled:before,
	table.dataTable thead .sorting_desc:after,
	table.dataTable thead .sorting_desc:before,
	table.dataTable thead .sorting_desc_disabled:after,
	table.dataTable thead .sorting_desc_disabled:before {
		bottom: .5em;
	}
	.text{
		color: white
	}
</style>

<script>
	$(document).ready(function () {
		$('#dtHorizontalExample').DataTable({
			"scrollX": true
		});
		$('.dataTables_length').addClass('bs-select');
	});
</script>

</head>

<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<a href="dashboard.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Admin Panel</a>
				<span class="breadcrumb-item active">Banners</span>
			</div>

			<div class="header-elements d-none">

			</div>
		</div>


	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">

		<div class="row">
			<div class="col-xl-12">

				<div class="card">
					<div class="row">
						<div class="col-md-6">
							<h2 class="p-3">Banners</h2>
							
						</div>
						<div class="col-md-6 text-right ">
							<a href="add_ban.php" style="margin-right: 20px;" type="button" class="btn btn-success mt-3" >Add Banner</a>
						</div>
					</div>

					<div class="row p-2">
						<?php
						if($recs)
						{
							foreach($recs as $rec)
							{
								?>
								<div class="col-md-4">
									<div class="card">
										<div class="card-body">
											<img src="uploads/<?php  echo $rec['image'] ?>" width="100%">
											<h2><?php  echo $rec['location'] ?></h2>
										 
										 
 
											<div class="row">
												<div class="col-md-12 text-center">
												 
													<a href="action.php?del_banner=<?php  echo $rec['id']; ?>"><i class="fas fa-trash text-dark fa-2x"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}
						?>
					</div>
				</div>
				<!-- /support tickets -->


			</div>


		</div>


	</div>

	<script>
		function deleteit(){
			return(confirm("The record will be deleted permanently. Do you really want to continue?"));
		}
		function editit(){
			return(confirm("Do you want to edit?"));
		}
	</script>


</html>