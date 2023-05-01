<?php

include('database.php');
include("header.php");
include("sidebar.php");

$query="SELECT * from sub order by id desc";
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
				<span class="breadcrumb-item active">Subscribed Users</span>
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
							<h2 class="p-3">Brand</h2>
						</div>

						<div class="col-md-6" style="text-align: right;padding: 20px;">
						</div>

					</div>
					<div class="table-responsive">
						<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
							<thead>

								<tr>
									<th>Username</th>
									<th>Email</th>
									<th>Password</th>
									<th>City</th>
									<th>State</th>
									<th>Postal Code</th>
									<th>Phone</th>
									<th>Delivery Address</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if($recs)
								{
									foreach($recs as $rec)
									{
									    $email=$rec['email'];
									    $query="SELECT * from user where email='$email'";
									    $user=db::getRecord($query);
										?>
										<tr>
										    <td><?php echo $user['username']; ?></td>
											<td><?php  echo $email; ?></td>
											<td><?php  echo $user['password']; ?></td>
											<td><?php  echo $rec['city']; ?></td>
											<td><?php  echo $rec['state']; ?></td>
											<td><?php  echo $rec['postalcode'] ?></td>
											<td><?php  echo $rec['phone'] ?></td>
											<td><?php  echo $rec['delivery_address'] ?></td>	
											<td><a href="order_detail.php">View Detail</a></td>
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
