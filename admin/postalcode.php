<?php

include('database.php');
include("header.php");
include("sidebar.php");

$query="SELECT * from postalcode";
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
</html>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<a href="dashboard.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Admin Panel</a>
				<span class="breadcrumb-item active">Postal Codes</span>
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
							<h2 class="p-3">Postal Code</h2>
						</div>

						<div class="col-md-6" style="text-align: right;padding: 20px;">
							<a class="btn btn-success " href="add_postal.php">Add Postal Code</a>
						</div>

					</div>
					<div class="table-responsive">
						<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
							<thead>

								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if($recs)
								{
									foreach($recs as $rec)
									{
										?>
										<tr>
											<td><?php  echo $rec['id'] ?></td>
											<td><?php  echo $rec['heading'] ?></td>
											<td><a  href="update_postal.php?id=<?php  echo $rec['id']; ?>"><i class="fas fa-edit text-dark"></a></td>
											<td><a href="action.php?del_postal=<?php  echo $rec['id']; ?>"><i class="fas fa-trash text-dark"></i></a></td>	
										</tr>
										<?php
									}
								}
								?>
							</tbody>
						</table>
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

	<?php

	include("footer.php");            

	?>
