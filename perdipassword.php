<?php
require_once("admin/database.php");
require_once("config.php");
$_SESSION['email'] = 'rutherles@gmail.com';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Password Reset PHP</title>
     
    <link rel="stylesheet" type="text/css" href="assets/css/demo10.min.css">
</head>

<body>
    <div class=" d-flex justify-content-center col-md-12 col-lg-12 col-xs-10 col-sm-10">
        <div class="login-popup">
            <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">

                <div class="tab-content">
                    <div class="tab-pane active" id="sign-in">

                        <form class="login-form" action="enter_email.php" method="post">
                            <h2 class="form-title d-flex justify-content-center">Recuperar senha</h2>
                            <!-- form validation messages -->
                            <?php include('messages.php'); ?>
                            <div class="form-group">
                                <label>Email *</label>
                                <input class="form-control" placeholder="Digite o Email" type="email" name="email"><br><br>
                                <p style="text-align:center ;">Você receberá um e-mail com instruções para <br> recuperar a senha. Acesse a sua caixa de e-mail <br> para continuar o processo!</p>
                            </div>



                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" name="reset-password" class="login-btn  btn btn-primary mr-sm-2">Recuperar senha</button>
                            </div>
                        </form>
                        <div class="container-fluid d-flex justify-content-center">
                            <div class="row">


                                <p>Lembrou a senha?
                                    <a href="login.php"> Entrar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>