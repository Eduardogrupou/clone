<?php

include('database.php');



$query="SELECT * FROM brand";
$data=db::getRecords($query);

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query2="SELECT * from product where id='$id'";
    $product=db::getRecord($query2);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Orvalho</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/site.webmanifest">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta name="description" content="Clean and minimal Dashboard UI Design Kit">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@ui8">
  <meta name="twitter:title" content="Core - Dashboard Builder">
  <meta name="twitter:description" content="Clean and minimal Dashboard UI Design Kit">
  <meta name="twitter:creator" content="@ui8">
  <meta name="twitter:image" content="https://ui8-core.herokuapp.com/img/twitter-card.jpg">
  <meta property="og:title" content="Core - Dashboard Builder">
  <meta property="og:type" content="Article">
  <meta property="og:url" content="https://ui8.net/ui8/products/core-dashboard-builder">
  <meta property="og:image" content="https://ui8-core.herokuapp.com/img/fb-og-image.jpg">
  <meta property="og:description" content="Clean and minimal Dashboard UI Design Kit">
  <meta property="og:site_name" content="Core - Dashboard Builder">
  <meta property="fb:admins" content="132951670226590">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/app.min.css">
      
         


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
	
	.card{
	    margin-left: 25%;
	     
	}
	
	.content{
    flex-grow: 1;
    margin-top: 4%;
    margin-right: 2%;
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


<body class="dark">
    
    		    <div class="sidebar">
    <?php 
require("sidebar.php")
?>

</div>

<?php
include("header.php")
    ?>




	<div class="content">
	    
	    

		<div class="row">
			<div class="col-xl-12">
	

				<div class="card">
				
					<div class="row p-2">
						<div class="col-md-12">
							<form method="POST" action="action.php" enctype="multipart/form-data">
								<label>Nome</label>
								<input type="text" class="form-control" placeholder="Name" name="name"  value="<?php  echo $product['name']; ?>" style="height:50px">

								<input type="hidden" name="id" value="<?php  echo $id; ?>">

								<label class="mt-3">Description</label>
								<textarea class="form-control" name="dcp"><?php  echo $product['dcp']; ?></textarea>

								<label class="mt-3">Image</label>
								<input type="file" class="form-control" name="image" style="height:50px"> 

								<label class="mt-3">Gender</label>
								<select class="form-control" name="gender"  style="height:50px">
                                <option disabled selected value=""><?php echo $product['gender']?></option>

									<option value="male" >Masculino</option>
									<option value="female" >Feminino</option>
                                    <option value="unisex" >Unisex</option>

								</select>

								<label class="mt-3">Marca</label>
								<select class="form-control" name="brand_id" id="cars">
									<?php foreach($data as $row){?>
                                            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
											<?php }?>
								</select>


                                <label class="mt-3">Destaque</label>
								<select class="form-control" name="fav" id="fav">
									

                                            <option disabled selected value=""><?php echo $product['destaque']?></option>
											

                                            <option value="sim">sim</option>
                                            <option value="nao">não</option>

											
								</select>

								<div class="row mt-3">
									<div class="col-md-12 text-center">
										<button class="btn btn-success" type="submit" name="update_product">Salvar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>



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


	<script>
		CKEDITOR.replace( 'dcp' );
	</script>
	</body>
	</html>