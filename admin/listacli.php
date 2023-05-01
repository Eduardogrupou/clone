<?php
include("header.php");

$query="SELECT count(*) from product";
$no_products=db::getCell($query);

$query="SELECT count(*) from product";
$no_products=db::getCell($query);

$query="SELECT count(*) from perfume_plans";
$no_plans=db::getCell($query);

?>

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
						 
						</div>
					</div>
				</div>

			 
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
     
				
                				<!-- Main charts -->
				<div class="row">
					<div class="col-xl-12">

						<!-- Traffic sources -->
						<div class="card">
							<div class="card-header header-elements-inline">
								
						<!-- Quick stats boxes -->
                                
                                	
						 
							<div class="col-lg-6">

								<!-- Members online -->
								<div class="card bg-teal-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0"><?php echo $no_plans; ?></h3>
										 
					                	</div>
					                	
					                	<div>
											Total Perfume Plans
											 
										</div>
									</div>

									<div class="container-fluid">
										<div id="members-online"></div>
									</div>
								</div>
								<!-- /members online -->

							</div>

							<div class="col-lg-6">

								<!-- Current server load -->
								<div class="card bg-pink-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0"><?php echo $no_products; ?></h3>
										 
                                        </div>
					                	
					                	<div>
											Total Products
											 
										</div>
									</div>

									<div id="server-load"></div>
								</div>
								<!-- /current server load -->

							</div>
					 
 
							</div>

						 
							 
						</div>
						
                       
                        
					</div>

				 
				</div>
				<!-- /main charts -->

                
                
                

			</div>
			<!-- /content area -->


<?php
require_once("footer.php");

?>