<?php

include('database.php');
include("header.php");
include("sidebar.php");

$query="SELECT * FROM user";
$queryP="SELECT name FROM product";
$data=db::getRecords($query);
$dataP=db::getRecords($queryP);

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
	.contenti{
	        flex-grow: 1;
    margin-left: 25%;
    margin-right: 1%;
	}
</style>
<body class="dark">
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

	<!-- /page header -->

	<!-- Content area -->
	<div class="contenti">

		<div class="row">
			<div class="col-xl-12">

				<div class="card">
					<div class="row">
						<div class="col-md-6">
							<h2 class="p-3">Criar Envios</h2>
						</div>
					</div>

					<div class="row p-2">
						<div class="col-md-12">
							<form method="POST" action="action.php" >
								<label>Código de rastreio</label>
								<input type="text" class="form-control" placeholder="Código de rastreio" name="codigo" style="height:50px">

           				
								<label class="mt-3">Cliente</label>
								<select require class="form-control"   name="cliente"  style="height:50px">
									<option selected >Escolha o usuario</option>
									<?php foreach ($data as $key => $s) {?>   
<option value="<?=$s['nome']?>"> <?=$s['nome'] . " cpf/ " . $s['cpf']?></option>  
<?php } ?> 
								</select>

								<label class="mt-3">Perfume 1</label>
								<select  class="form-control"   name="perfume1"  style="height:50px">
									<option value="" selected >Escolha o Perfume</option>
									<?php foreach ($dataP as $key => $s) {?>   
<option value="<?=$s['name']?>"><?=$s['name']?></option>  
<?php } ?> 
								</select>

								<label class="mt-3">Perfume 2</label>
								<select  class="form-control"   name="perfume2"  style="height:50px">
									<option value="" selected >Opicional</option>
									<?php foreach ($dataP as $key => $s) {?>   
<option value="<?=$s['name']?>"><?=$s['name']?></option>  
<?php } ?> 
								</select>

								<label class="mt-3">Perfume 3</label>
								<select  class="form-control"   name="perfume3"  style="height:50px">
									<option value="" selected >Opicional</option>
									<?php foreach ($dataP as $key => $s) {?>   
<option value="<?=$s['name']?>"><?=$s['name']?></option>  
<?php } ?> 
								</select>

								<label class="mt-3">Status</label>
								<select class="form-control" name="status" id="cars">
									
                                            <option value="Pedido Recebido">Pedido recebido</option>
											<option value="Em preparação">Em preparação</option>
											<option value="Enviado">Enviado</option>
											<option value="Enviado">Cancelado</option>


											
								</select>

								<div class="row mt-3">
									<div class="col-md-12 text-center">
										<button class="btn btn-success" type="submit" name="add_envios">Salvar</button>
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