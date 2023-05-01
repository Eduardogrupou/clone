<?php

include('database.php');
include("header.php");
include("sidebar.php");

$query="SELECT * from contact ";
$contact=db::getRecord($query);
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
</html>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<a href="dashboard.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Admin Panel</a>
				<span class="breadcrumb-item active">Contact</span>
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
							<h2 class="p-3">Contact</h2>
						</div>
					</div>

					<div class="row p-2">
						<div class="col-md-12">
							<form method="POST" action="action.php" enctype="multipart/form-data">
								<label>Location</label>
								<input type="text" class="form-control" placeholder="Location" name="location" style="height:50px" value="<?php  echo $contact['location']; ?>">

								<label class="mt-3">Email</label>
								<input type="text" class="form-control" value="<?php  echo $contact['email']; ?>"  name="email" style="height:50px">

								<label class="mt-3">Phone</label>
								<input type="text" class="form-control" value="<?php  echo $contact['phone']; ?>"  name="phone" style="height:50px">

								<div class="row mt-3">
									<div class="col-md-12 text-center">
										<button class="btn btn-success" type="submit" name="update_contact">Update</button>
									</div>
								</div>
							</form>
						</div>
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
	<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

	<?php

	include("footer.php");            

	?>
<script>
		CKEDITOR.replace( 'dcp' );
	</script>