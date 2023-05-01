<?php

include('database.php');
include("header.php");
include("sidebar.php");


$query="SELECT * from product";
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
	
   
    
   

.delete-icon {
         position: absolute;
    transform: translateX(-10%);
    color: #fff!important;
    background-color: #404040;
    border-radius: 50%;
    transition: all 0.3s ease-in-out;
    top: 0;
    right: 0;
   }
}

.delete-icon:hover {
  background-color: #f44336;
}


  /* Custom styles */
  .content-wrapper {
        background: #404040;
    min-height: 100vh;
  }

  .col-xl-12 {
    max-width: 75%;
    margin-left: 24%;
  }

  .card {
    position: relative;
    background: #202020;
    color: #fff;
  }

  .card-body {
    background: #404040;
    border-radius: 20px;
    position: relative;
    min-width: 263px;
    padding: 10px;
  }

  .card-body img {
       background: #404040;
    border-radius: 20px;
    position: relative;
    padding: 10px;
    width: 100%;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -10px;
    margin-left: -10px;
  }

  .col-md-4 {
    padding-right: 10px;
    padding-left: 10px;
    margin-bottom: 20px;
  }

  .delete-icon:hover {
    color: red;
    cursor: pointer;
  }

  .btn-success {
    margin-right: 20px;
  }
  
 
  
  .nome{
    text-align: center!important;
    color: #fff;
    font-size: 1.3rem;
    font-family: Sans-Serif;
  }
  
  .marc{
    color: #c9c9c9;
    font-size: 1rem;
    font-family: Sans-Serif;
  }
  
  .gen{ color: #c9c9c9;
    font-size: 1rem;
    font-family: Sans-Serif;
  }
  
  
 .botao__perf {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 10px;
}

.bta__editar {
     background-color: green;
    border-color: green;
    width: 100%;
    padding: 15px;
    border-radius: 10px;
}

.bta__deletar {
    background-color: red;
    border-color: red;
    width: 100%;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
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

	<!-- /page header -->

	<!-- Content area -->
	<div class="content">

		<div class="row">
			<div class="col-xl-12">

				<div class="card">
					<div class="row">
						<div class="col-md-6">
							<h2 class="p-3">Produtos</h2>
							
						</div>
						<div class="col-md-6 text-right ">
							<a href="add_product.php" style="margin-right: 20px;" type="button" class="btn btn-success mt-3" >Adcionar Produtos</a>
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
      <div class="d-flex justify-content-between align-items-start">
        <img src="uploads/<?php echo $rec['image'] ?>">
        <a href="action.php?del_product=<?php echo $rec['id']; ?>"></a>
      </div>
      <div class="nome" font-size="small"><?php echo $rec['name'] ?></div>
      <div class="gen" font-size="medium"><?php echo $rec['gender'] ?></div>
      <div class="marc" font-size="medium">
        <?php
          $bId=$rec['brand_id'];
          $query="SELECT * from brand WHERE id='$bId'";
          $brand=db::getRecord($query);
          echo $brand['name'];
        ?>
      </div>
      <div class="botao__perf flex-wrap justify-content-between mt-4">
        <a href="update_product.php?id=<?php echo $rec['id']; ?>"><button class="btn-success bta__editar" type="button">Editar</button></a>
        <a href="delete_product.php?id=<?php echo $rec['id']; ?>"><button class="btn-success bta__deletar" type="button">Excluir</button></a>
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
		</div>
		

	<script>
		function deleteit(){
			return(confirm("The record will be deleted permanently. Do you really want to continue?"));
		}
		function editit(){
			return(confirm("Do you want to edit?"));
		}
	</script>