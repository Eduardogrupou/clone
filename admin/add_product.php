<?php

include('database.php');
include("header.php");
include("sidebar.php");

$query="SELECT * FROM brand";
$data=db::getRecords($query);
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
	.form-control{
	        margin-top: 8px;
    margin-bottom: 2%;
	}
	.content-wrapper{
	        display: flex;
    flex-direction: column;
	}
	.content{
	  margin-left: 21%;
	}
	
	.row{
    margin-left: 3%!important;
    margin-right: 1%!important;
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
<div class="content-wrapper">


	

	
	<div class="content">

		<div class="row">
			<div class="col-xl-12">

				<div class="card">
					<div class="row">
						<div class="col-md-6">
							<h2 class="p-3">Adcionar Produto</h2>
						</div>
					</div>

					<div class="row p-2">
						<div class="col-md-12">
							<form method="POST" action="action.php" enctype="multipart/form-data">
								<label>Nome</label>
								<input type="text" class="form-control" placeholder="Name" name="name" style="height:50px">

								<label class="mt-3">Descrição</label>
								<textarea class="form-control" name="dcp"></textarea>

								<label class="mt-3">Imagem</label>
								<input type="file" class="form-control" name="image" style="height:50px"> 

								<label class="mt-3">Genero</label>
								<select class="form-control" name="gender" id="cars">
									<option value="Male">Masculino</option>
									<option value="Female">Feminino</option>
								</select>

								<label class="mt-3">Marca</label>
								<select class="form-control" name="brand_id" id="cars">
									<?php foreach($data as $row){?>
                                            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
											<?php }?>
								</select>

                                <label class="mt-3">Favorito</label>
								<select class="form-control" name="fav" id="fav">
									
                                        <option value="-">favoritar</option>

                                            <option value="true">sim</option>
                                            <option value="false">nao</option>

											
								</select>

								<div class="row mt-3">
									<div class="col-md-12 text-center">
										<button class="btn btn-success" type="submit" name="add_product">Salvar</button>
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


	<script>
		CKEDITOR.replace( 'dcp' );
	</script>
	</body>
	</html>