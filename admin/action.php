<?php

include("config.php");


if(isset($_GET['endereco']))
{
    
    echo $_GET['cep'];
    echo $_GET['numero'];
}




session_start();

if(isset($_SESSION['email']))
{
  $admin = $_SESSION['email'];
}

require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
                // all insertion code start









if(isset($_POST['login']))
{
    $email=$_POST['username'];
    $password=$_POST['password'];
    
    $query="SELECT * from admin where email='$email' && password='$password'";
    $rec=db::getRecord($query);
    
    if($rec!=NULL)
    {  
        
        $_SESSION['email']=$email;
        echo "<script>location='dashboard.php'</script>";
    }
    else
    {
       echo "<script>location='index.php?status=1'</script>";
    }
}
//update admin
if (isset($_POST['update'])) 
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    if($_FILES['doc_file']['name']=="")
    {
      $sql2 = "UPDATE admin SET name='$name',password='$password'";
      $r = db::query($sql2);
      echo "<script>location='profile.php?status=1'</script>";  
    }else
    {   
            $file = rand(1000,100000)."-".$_FILES['doc_file']['name'];
            $file_loc = $_FILES['doc_file']['tmp_name'];
            $file_size = $_FILES['doc_file']['size'];
            $file_type = $_FILES['doc_file']['type'];
            $folder ="uploads/";
            $new_file_name = strtolower($file);
            $final_file=str_replace(' ','-',$new_file_name);
            $a = move_uploaded_file($file_loc,$folder.$final_file);
            $sql2 = "UPDATE admin SET name='$name',password='$password',image='$final_file'";
            $r = db::query($sql2);
             echo "<script>location='profile.php?status=1'</script>";

    }
}

//logout
if(isset($_GET['logout']))
{
  unset($_SESSION['email']);
   echo "<script>location='index.php'</script>";
}

//delete_viewer
if(isset($_GET['delete_viewer']))
{
    $id = $_GET['delete_viewer'];

     $sql = "DELETE FROM user WHERE id='$id'";
    db::query($sql);
    echo "<script>location='viewers.php'</script>";
}


//add_plan
if (isset($_POST['add_plan'])) {
  $heading=$db->real_escape_string($_POST['heading']);
  $dcp=$db->real_escape_string($_POST['dcp']);
  $duration=$db->real_escape_string($_POST['duration']);

  $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
  $file_loc = $_FILES['image']['tmp_name'];
  $file_size = $_FILES['image']['size'];
  $file_type = $_FILES['image']['type'];
  $folder = "uploads/";
  $new_file_name = strtolower($file);
  $final_file = str_replace(' ', '-', $new_file_name);
  $a = move_uploaded_file($file_loc, $folder . $final_file);

  $query_insert = "INSERT INTO `plan` (`heading`,`dcp`,`duration`,`image`) VALUES ('$heading','$dcp','$duration','$final_file')";

  db::query($query_insert);
  echo "<script>location='plan.php'</script>";
}

// update_plan
if (isset($_POST['update_plan'])) {
  $heading=$db->real_escape_string($_POST['heading']);
  $dcp=$db->real_escape_string($_POST['dcp']);
  $duration=$db->real_escape_string($_POST['duration']);
  

  $id = $_POST['id'];
  if ($_FILES['image']['name'] == "") {
    $sql = "UPDATE plan SET heading='$heading',dcp='$dcp',duration='$duration' WHERE id='$id'";
    db::query($sql);
  } else {
    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $sql = "UPDATE plan SET heading='$heading',dcp='$dcp',duration='$duration',image='$final_file' WHERE id='$id'";
    echo db::query($sql);
  }
  echo "<script>location='plan.php'</script>";
}

// del_plan
if (isset($_GET['del_plan'])) {
  $id = $_GET['del_plan'];
  $sql = "DELETE FROM plan WHERE id='$id'";
  db::query($sql);
  echo "<script>location='plan.php'</script>";
}









//update_envios brendo


if (isset($_POST['update_envios'])) {
    $id=$_POST['id'];
    $status=$_POST['status'];
    $perfume1=$_POST['perfume1'];
    $perfume2=$_POST['perfume2'];
    $perfume3=$_POST['perfume3'];
    $cliente=$_POST['cliente'];
    $codigo=$_POST['codigo'];
    $data = date("d/m/Y");

    $query_insert = "UPDATE envio SET status='$status',perfume1='$perfume1',perfume2='$perfume2',perfume3='$perfume3',cliente='$cliente', codigo='$codigo',data='$data' WHERE id='$id'";
  
    db::query($query_insert);
    echo "<script>location='envios.php?status=1'</script>";
  }



  //add  envios brendo

  if (isset($_POST['add_envios'])) {


    $cliente=($_POST['cliente']);

    

    $sqlIduser = "SELECT id from user WHERE nome='$cliente' ";
    $result = $conn->query($sqlIduser);

    $sqlCpfuser = "SELECT cpf from user WHERE nome='$cliente' ";
    $resultCpf = $conn->query($sqlCpfuser);

    $row = mysqli_fetch_row($result);
    $userID = $row[0];

    $rowCpf = mysqli_fetch_row($resultCpf);
    $userCpf = $rowCpf[0];

    

    $status=($_POST['status']);
    $perfume1=($_POST['perfume1']);
    $perfume2=($_POST['perfume2']);
    $perfume3=($_POST['perfume3']);
    $codigo=($_POST['codigo']);
    $data = date("d/m/Y");




  
    $query_insert = "INSERT INTO `envio` (`status`,`perfume1`,`perfume2`,`perfume3`,`codigo`,`cliente`,`userId`,`data` ,`cpf`) VALUES ('$status','$perfume1','$perfume2','$perfume3','$codigo','$cliente','$userID','$data' ,'$userCpf')";
  
    db::query($query_insert);
    echo "<script>location='envios.php?status=1'</script>";


  }

//add_product






if (isset($_POST['add_product'])) {
  
  $name=$db->real_escape_string($_POST['name']);
  $dcp=$db->real_escape_string($_POST['dcp']);
  $gender=$db->real_escape_string($_POST['gender']);
  $brand_id=$db->real_escape_string($_POST['brand_id']);
  $fav=$db->real_escape_string($_POST['fav']);

  $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
  $file_loc = $_FILES['image']['tmp_name'];
  $file_size = $_FILES['image']['size'];
  $file_type = $_FILES['image']['type'];
  $folder = "uploads/";
  $new_file_name = strtolower($file);
  $final_file = str_replace(' ', '-', $new_file_name);
  $a = move_uploaded_file($file_loc, $folder . $final_file);

  $query_insert = "INSERT INTO `product` (`name`,`dcp`,`gender`,`image`,`brand_id`,`destaque`) VALUES ('$name','$dcp','$gender','$final_file','$brand_id','$fav')";

  db::query($query_insert);
  echo "<script>location='product.php'</script>";
}

// update_product
if (isset($_POST['update_product'])) {
$id = $_POST['id'];
$query="SELECT * from  product WHERE id='$id' ";
$rec=db::getRecord($query);

  $name=$db->real_escape_string($_POST['name']) ? $db->real_escape_string($_POST['name']) : $rec['name'];
  $dcp=$db->real_escape_string($_POST['dcp']) ? $db->real_escape_string($_POST['dcp']) : $rec['dcp'];
  $gender=$db->real_escape_string($_POST['gender']) ?  $db->real_escape_string($_POST['gender']) : $rec['gender'];
  $brand_id=$db->real_escape_string($_POST['brand_id']) ? $db->real_escape_string($_POST['brand_id']) : $rec['brand_id'];
  $fav=$db->real_escape_string($_POST['fav']) ? $db->real_escape_string($_POST['fav']) : $rec['destaque'];

  



  if ($_FILES['image']['name'] == "") {
    $sql = "UPDATE product SET name='$name',dcp='$dcp',gender='$gender',brand_id='$brand_id', destaque='$fav' WHERE id='$id' ";
    db::query($sql);
  } else {
    $fav=$db->real_escape_string($_POST['fav']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $sql = "UPDATE product SET name='$name',dcp='$dcp',gender='$gender',brand_id='$brand_id',image='$final_file', destaque='$fav' WHERE id='$id'";
    echo db::query($sql);
  }
  echo "<script>location='product.php'</script>";
}

// del_product
if (isset($_GET['del_product'])) {
  $id = $_GET['del_product'];
  $sql = "DELETE FROM product WHERE id='$id'";
  db::query($sql);
  echo "<script>location='product.php'</script>";
}

//add_brand
if (isset($_POST['add_brand'])) {
  $name=$db->real_escape_string($_POST['name']);


  $query_insert = "INSERT INTO `brand` (`name`) VALUES ('$name')";

  db::query($query_insert);
  echo "<script>location='brand.php'</script>";
}

//add_postal
if (isset($_POST['add_postal'])) {
  $name=$db->real_escape_string($_POST['name']);


  $query_insert = "INSERT INTO `postalcode` (`heading`) VALUES ('$name')";

  db::query($query_insert);
  echo "<script>location='postalcode.php'</script>";
}

// update_brand
if (isset($_POST['update_brand'])) {
  $name=$db->real_escape_string($_POST['name']);

  $id = $_POST['id'];
  if ($_FILES['image']['name'] == "") {
    $sql = "UPDATE brand SET name='$name' WHERE id='$id'";
    db::query($sql);
  }
  echo "<script>location='brand.php'</script>";
}

// update_postal
if (isset($_POST['update_postal'])) {
  $name=$db->real_escape_string($_POST['name']);

  $id = $_POST['id'];
    $sql = "UPDATE postalcode SET heading='$name' WHERE id='$id'";
    db::query($sql);
 
  echo "<script>location='postalcode.php'</script>";
}


// del_brand
if (isset($_GET['del_brand'])) {
  $id = $_GET['del_brand'];
  $sql = "DELETE FROM brand WHERE id='$id'";
  db::query($sql);
  echo "<script>location='brand.php'</script>";
}


// del_postal
if (isset($_GET['del_postal'])) {
  $id = $_GET['del_postal'];
  $sql = "DELETE FROM postalcode WHERE id='$id'";
  db::query($sql);
  echo "<script>location='postalcode.php'</script>";
}

// update_contact
if (isset($_POST['update_contact'])) {
  $location = $db->real_escape_string($_POST['location']);
  $email = $db->real_escape_string($_POST['email']);
  $phone = $db->real_escape_string($_POST['phone']);
  if ($_FILES['image']['name'] == "") {
    $sql = "UPDATE contact SET location='$location',email='$email',phone='$phone' ";
    db::query($sql);
  }
  echo "<script>location='contact.php'</script>";
}


//add_faq
if (isset($_POST['add_faq'])) {
  $question=$db->real_escape_string($_POST['question']);
  $answer=$db->real_escape_string($_POST['answer']);


  $query_insert = "INSERT INTO `faq` (`question`,`answer`) VALUES ('$question','$answer')";

  db::query($query_insert);
  echo "<script>location='faq.php'</script>";
}

// update_faq
if (isset($_POST['update_faq'])) {
  $question=$db->real_escape_string($_POST['question']);
  $answer=$db->real_escape_string($_POST['answer']);
  

  $id = $_POST['id'];
  if ($_FILES['image']['name'] == "") {
    $sql = "UPDATE faq SET question='$question',answer='$answer' WHERE id='$id'";
    db::query($sql);
  }
  echo "<script>location='faq.php'</script>";
}


if(isset($_GET['del_perfume_plans']))
{
    $id=$_GET['del_perfume_plans'];
    $query="DELETE from perfume_plans where id='$id'";
    db::query($query);
    echo "<script>location='perfume_plans.php'</script>";
}



if(isset($_POST['add_perfume_plan']))
{
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $plan_id=$_POST['plan_id'];
    $stripe_id=$_POST['pr_id'];
    $query="INSERT into perfume_plans (quantity, price, plan_id,price_id)VALUES('$quantity','$price','$plan_id','$stripe_id')";
    db::query($query);
    echo "<script>location='perfume_plans.php'</script>";
}

if(isset($_GET['get_price']))
{
     $perfume_plan_id=$_POST['perfume_plan_id'];
     $query="SELECT price from perfume_plans where id='$perfume_plan_id'";
     echo $price=db::getCell($query);
    
}

//add_product
if (isset($_POST['add_ban'])) {

  
    if ($_FILES['home']['name']) {

        $home = strtolower(substr($_FILES['home']['name'],-4)); //Pegando homeensão do arquivo
        $new_name = rand(10,100) . $home; //Definindo um novo nome para o arquivo
        $dir = 'uploads/'; //Diretório para uploads 
        move_uploaded_file($_FILES['home']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        
        $query_insert = "UPDATE `baner` SET imagem_id=1 , imagem='$new_name' WHERE imagem_id=1 ";

        db::query($query_insert);


    }


    if ($_FILES['plano']['name']) {

        $plano = strtolower(substr($_FILES['plano']['name'],-4)); //Pegando planoensão do arquivo
        $new_name = rand(10,100) . $plano; //Definindo um novo nome para o arquivo
        $dir = 'uploads/'; //Diretório para uploads 
        move_uploaded_file($_FILES['plano']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        
        $query_insert = "UPDATE `baner` SET imagem_id=2 , imagem='$new_name' WHERE imagem_id=2 ";

        db::query($query_insert);


    }

    if ($_FILES['catalogo']['name']) {

        $catalogo = strtolower(substr($_FILES['catalogo']['name'],-4)); //Pegando catalogoensão do arquivo
        $new_name = rand(10,100) . $catalogo; //Definindo um novo nome para o arquivo
        $dir = 'uploads/'; //Diretório para uploads 
        move_uploaded_file($_FILES['catalogo']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        
        $query_insert = "UPDATE `baner` SET imagem_id=3 , imagem='$new_name' WHERE imagem_id=3 ";

        db::query($query_insert);


    }

     

  

    


 
 echo "<script>location='add_ban.php'</script>";
}

 
// del_product
if (isset($_GET['del_banner'])) {
  $id = $_GET['del_banner'];
  $sql = "DELETE FROM banners WHERE id='$id'";
  db::query($sql);
  echo "<script>location='banner.php'</script>";
}


if (isset($_GET['endereco'])) {
    require_once("admin/config.php");

    $cep = $_GET['cep'];
    $rua = $_GET['rua'];
    $bairro = $_GET['bairro'];
    $cidade = $_GET['cidade'];
    $uf = $_GET['uf'];
    $numero = $_GET['numero'];
    $complemento = $_GET['complemento'];
    $nome = $_GET['nome'];
    
    echo $cep;
    echo $rua;
    echo $cidade;

    $usuario = $_SESSION['user'];


    $sql = "UPDATE user SET cep='$cep', rua='$rua',bairro='$bairro',cidade='$cidade',uf='$uf', numero='$numero',complemento='$complemento',nome='$nome' WHERE email='$usuario'";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    
    }




?>