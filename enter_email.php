<?php include('app_logic.php'); ?>
<?php include('Header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Password Reset PHP</title>
    <!-- Default CSS -->
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
                           <h5 style="color: red;"> <?php include('messages.php'); ?> </h5>
                            <div class="form-group">
                                <label>Email *</label>
                                <input class="form-control" placeholder="Digite o Email" type="email" name="email"><br><br>
                                <p style="text-align:center ;">Você receberá um e-mail com instruções para <br> recuperar a senha. Acesse a sua caixa de e-mail <br> para continuar o processo!</p>
                            </div>



                            <div class="form-group d-flex justify-content-center">
                                <button value="Alterar_senha" type="submit" name="reset-password" class="login-btn  btn btn-primary mr-sm-2">Recuperar senha</button>
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