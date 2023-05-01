<?php
session_start();

include("admin/database.php");


if(isset($_POST["login"]))
{
    
    $email=$_POST['email'];
    $password=$_POST['pass'];
    
   
    
    $query="SELECT * from user where email='$email' && password='$password'";
    $rec=db::getCell($query);
    
    if($rec!=NULL)
    {  
        
        $_SESSION['email']=$rec['email'];
        $_SESSION['user']=$email;
        echo "<script>location='dashboard.php'</script>";
    }
    else
    {
       echo "<script>location='login.php?status=1'</script>";
    }

}


  if (isset($_GET["masculino"])) {
    $sexo = $_GET['sexo'];
    $city = $_GET['city'];
    $estilo= $_GET['estilo'];
    $clima=$_GET['clima'];
    $ambiente=$_GET['ambiente'];
    $atividade=$_GET['atividade'];
   
    $resultado =  $sexo.$city.$estilo.$clima.$ambiente.$atividade;
   
    $A = substr_count ( $resultado , 'A');
    $B = substr_count ( $resultado , 'B');
    $C = substr_count ( $resultado , 'C');
    $D = substr_count ( $resultado , 'D');
   
    $array = array(
     'A' => $A,
     'B' => $B,
     'C' => $C,
     'D' => $D);


    
   $letra = array_search(max($array),$array);

   if ($letra == "A") {

  $useremail= $_SESSION['user'];

  $query="SELECT email from user WHERE email='$useremail'";
    $rec=db::getCell($query);

    if(!$rec)
        {
            $send="INSERT INTO user(perfil)VALUES('CASUAL')";
            $exec=db::query($send);
            echo "<script>location='perfil.php?perfil=CASUAL'</script>";
        }



    

   }


   if ($letra == "B") {

    $useremail= $_SESSION['user'];
  
    $query="SELECT email from user WHERE email='$useremail'";
      $rec=db::getCell($query);
  
      if(!$rec)
          {
              $send="INSERT INTO user(perfil)VALUES('CONQUISTADOR')";
              $exec=db::query($send);
              echo "<script>location='perfil.php?perfil=CONQUISTADOR'</script>";
          }
  
  
  
      
  
     }

     if ($letra == "C") {

        $useremail= $_SESSION['user'];
      
        $query="SELECT email from user WHERE email='$useremail'";
          $rec=db::getCell($query);
      
          if(!$rec)
              {
                  $send="INSERT INTO user(perfil)VALUES('SEDUTOR')";
                  $exec=db::query($send);
                  echo "<script>location='perfil.php?perfil=SEDUTOR'</script>";
              }
      
      
      
          
      
         }

         if ($letra == "D") {

            $useremail= $_SESSION['user'];
          
            $query="SELECT email from user WHERE email='$useremail'";
              $rec=db::getCell($query);
          
              if(!$rec)
                  {
                      $send="INSERT INTO user(perfil)VALUES('SOFISTICADO')";
                      $exec=db::query($send);
                      echo "<script>location='perfil.php?perfil=SOFISTICADO'</script>";
                  }
          
          
          
              
          
             }
          
      
  
    
    }
    




if(isset($_GET["logout"]))
{
    unset($_SESSION['email']);
    echo "<script>location='index.php'</script>";

}

if(isset($_POST["purchase"]))
{
    $month=$_POST['month'];
    $day=$_POST['day'];
    $p_id=$_POST['p_id'];
    $email=$_SESSION['email'];
    $sub_id="SELECT id from sub where email='$email'";
    $get=db::getCell($sub_id);
    $sub_id=$get;

    $query="INSERT INTO perfumes(month,day,p_id,sub_id)VALUES('$month','$day','$p_id','$sub_id')";
    $rec=db::query($query);

    echo "<script>location='submit.php'</script>";

}

if(isset($_POST["profile"]))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $add=$_POST['add'];
    $suit=$_POST['suit'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $postal=$_POST['postal'];
    $phone=$_POST['phone'];
    $u_id=$_SESSION['email'];
 
    $query="INSERT INTO profile(u_id,fname,lname,addr,suit,city,country,state,postal,phone)VALUES('$u_id','$fname','$lname','$add','$suit','$city','$country','$state','$postal','$phone')";
    $rec=db::query($query);

    echo "<script>location='profile_detail.php'</script>";

}


if(isset($_POST["register"]))
{
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $cpass=$_POST['cpass'];
    $pass=$_POST['pass'];
    
    $query="SELECT email from user WHERE email='$email'";
    $rec=db::getCell($query);
    
    if($cpass==$pass)
    {
        if(!$rec)
        {
            $send="INSERT INTO user(email,username,password)VALUES('$email','$uname','$pass')";
            $exec=db::query($send);
            echo "<script>location='login.php?status=3'</script>";
        }
        else
        {
            echo "<script>location='login.php?status=2'</script>";
        }
    }
    else
    {
        echo "<script>location='login.php?status=1'</script>";
    }
    
    

}



if(isset($_GET["fav2"])&&isset($_GET["st"]))
{
    $p_id=$_GET["fav2"];
    $st=$_GET["st"];
    $u_id=$_SESSION['email'];

    if($st==1)
    {
        
        $add="INSERT INTO fav(p_id,u_id)VALUES('$p_id','$u_id')";
        $exc=db::query($add);
        echo "<script>location='index.php#perfumes'</script>";
    }
    else if($st==0)
    {
        echo 2;
        $add="DELETE FROM fav WHERE u_id='$u_id' and p_id='$p_id'";
        $exc=db::query($add);
       echo "<script>location='index.php#perfumes'</script>";
    }
}








if(isset($_GET["fav"])&&isset($_GET["st"]))
{
    $p_id=$_GET["fav"];
    $st=$_GET["st"];
    $u_id=$_SESSION['email'];

    if($st==1)
    {
        
        $add="INSERT INTO fav(p_id,u_id)VALUES('$p_id','$u_id')";
        $exc=db::query($add);
        echo "<script>location='detalhes.php?id=".$p_id."'</script>";
    }
    else if($st==0)
    {
        echo 2;
        $add="DELETE FROM fav WHERE u_id='$u_id' and p_id='$p_id'";
        $exc=db::query($add);
       echo "<script>location='detalhes.php?id=".$p_id."'</script>";
    }
}

if(isset($_GET["fav_id"]))
{
    $p_id=$_GET["fav_id"];
    $u_id=$_SESSION['email'];
 
        echo 2;
        $add="DELETE FROM fav WHERE u_id='$u_id' and p_id='$p_id'";
        $exc=db::query($add);
       echo "<script>location='favourite_wishlist.php'</script>";
   
}

?>