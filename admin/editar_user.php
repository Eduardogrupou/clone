<?php

include('config.php');
include("header.php");
include("sidebar.php");

$sql = "SELECT * FROM user WHERE id=" .$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

$id = $_REQUEST["id"];


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
  <meta name="theme-color" content="#121212">
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
   
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="row">
                        
                        </div>

                        <div class="col-md-6" style="text-align: right;padding: 20px;">
                        </div>

                    </div>

<div class="container">
                    <form action="salvar.php" method="POST">
                        
                        
                        <div class="form-group">
                        <input name="id" type="hidden" value="<?php print $row->id; ?> " id="id">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input name="username" value="<?php print $row->username;?>" type="text" class="form-control" id="nome">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input name="email"  value="<?php print $row->email;?>" type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>

                            <select name="status"  class="form-control form-control-sm">
                                <option  >Selecione</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço</label>
                                <input name="address" value="<?php print $row->address;?>" type="text" class="form-control" id="endereco">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>



                    </form>

</div>


                </div>



            </div>
            <!-- /support tickets -->


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
</body>
</html>