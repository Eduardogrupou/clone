<?php
include("sidebar.php");
include('database.php');
include("config.php");

$sql = "SELECT  imagem FROM baner WHERE imagem_id='1'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$sql2 = "SELECT  imagem FROM baner WHERE imagem_id='2'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();

$sql3 = "SELECT  imagem FROM baner WHERE imagem_id='3'";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();





$imagem = $row["imagem"];
$imagem2 = $row2["imagem"];
$imagem3 = $row3["imagem"];





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Core - Dashboard Builder</title>
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

    #dtHorizontalExample th,
    td {
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

    .text {
        color: white
    }
    	.card{
	    margin-left: 25%;
    background: #202020!important;
    height: 100%;
    position: relative;
    border-radius: 8px;
	     
	}
	
	.content{
    flex-grow: 1;
    margin-right: 2%;
    margin-left: -1%;
    width: 100%;
    
	}
	
	.content-wrapper{
	    background: #404040;
	    min-height: 100vh;
	   
	}
	
	.mt-3{
	    color: #fff;
	}
	
	.p-3{
	    color: #fff;
	}
	.p-2{
	    margin-top: 20px;
	    color: #fff;
	}
	
	.btn-success{
	     background-color: #39902b;
    color: #000;
    padding: 13px;
    width: 20%;
    border-radius: 5px;
    margin-left: 35%;
	}
	
	.col-md-12{
	        display: flex;
    flex-direction: column;
	}
	
	.form12{
	    display: flex;
	    flex-direction: column;
	}
	
	.col-md-4{
	    margin-bottom: 10%;
	}
	

	

    </style>

    <script>
    $(document).ready(function() {
        $('#dtHorizontalExample').DataTable({
            "scrollX": true
        });
        $('.dataTables_length').addClass('bs-select');
    });
    </script>
    </head>





<body>
    
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <a href="dashboard.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Admin Panel</a>
                <span class="breadcrumb-item active">Add banner</span>
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
                            <h2 class="p-3">Adcionar banner</h2>
                        </div>
                    </div>

                  <form class="form12 form-inline" method="POST" action="action.php" enctype="multipart/form-data">
    <div class="row p-2">
        <div class="col-md-4 d-flex flex-column align-items-start">
             <div class="mt-3">Banner Home</div>
  <div class="d-flex align-items-center justify-content-between">
    <img src="http://orvalhosj.com/admin/uploads/<?php echo $imagem ?>" alt="some text" width=170 height=80>
    <strong>1920x1280*</strong>
    <input type="file" class="form-control" name="home" style="height:50px">
  </div>
 
</div>
        <div class="col-md-4 d-flex flex-column align-items-start">
             <div class="mt-3">Banner Planos</div>
            <img src="http://orvalhosj.com/admin/uploads/<?php echo $imagem2 ?>" alt="some text" width=170 height=80>
            <strong>1920x1280*</strong>
            <input type="file" class="form-control" name="plano" style="height:50px">
        </div>
        <div class="col-md-4 d-flex flex-column align-items-start">
                         <div class="mt-3">Banner Catalogos</div>
            <img src="http://orvalhosj.com/admin/uploads/<?php echo $imagem3 ?>" alt="some text" width=170 height=80>
             <strong>1360x300*</strong>
          <input type="file" class="form-control" name="catalogo" style="height:50px">
        </div>
    </div>
</form>



                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-success" type="submit" name="add_ban">Salvar</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                


            </div>


        </div>


    </div>
    </div>
    

    <script>
    function deleteit() {
        return (confirm("The record will be deleted permanently. Do you really want to continue?"));
    }

    function editit() {
        return (confirm("Do you want to edit?"));
    }
    </script>
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

   
    <script>
    CKEDITOR.replace('dcp');
    </script>
    </body>
    </html>
    