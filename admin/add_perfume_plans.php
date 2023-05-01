<?php

include('database.php');
include("header.php");
include("sidebar.php");

$query="SELECT * from plan";
$plan=db::getRecords($query);

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
				<span class="breadcrumb-item active">Add Perfume Plan</span>
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
							<h2 class="p-3">Add Perfume Plan</h2>
						</div>
					</div>

					<div class="row p-2">
						<div class="col-md-12">
							<form method="POST" action="action.php" enctype="multipart/form-data">
								<label>Quantity</label>
								<input type="text" class="form-control" placeholder="Quantity" name="quantity" style="height:50px">
								
								<label class="mt-3">Price</label>
								<input type="text" class="form-control" name="price" style="height:50px">
								
								<label class="mt-3">Select Plan</label>
								<select class="form-control" name="plan_id">
								    <?php
								    if($plan){
								        foreach($plan as $p){
								            ?>
								            <option value="<?php  echo $p['id'] ?>"><?php echo $p['heading']  ?></option>
								            <?php
								        }
								    }
								    ?>
								</select>
								
								<label class="mt-3">Stripe Price ID</label>
								<input type="text" class="form-control" name="pr_id" style="height:50px">


								<div class="row mt-3">
									<div class="col-md-12 text-center">
										<button class="btn btn-success" type="submit" name="add_perfume_plan">Submit</button>
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
	