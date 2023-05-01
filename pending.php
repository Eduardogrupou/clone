<?php include('app_logic.php'); ?>
<?php include('Header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Password Reset PHP</title>
    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo10.min.css">
    <style>
             .profile-card {
            background: #333;
            width: 56px;
            height: 56px;
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 2;
            overflow: hidden;
            opacity: 0;
            margin-top: 70px;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-border-radius: 50%;
            border-radius: 50%;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
            animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards,
                moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards,
                moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards,
                materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
        }


        @keyframes init {
            0% {
                width: 0px;
                height: 0px;
            }

            100% {
                width: 56px;
                height: 56px;
                margin-top: 0px;
                opacity: 1;
            }
        }

        @keyframes moveDown {
            0% {
                top: 50%;
            }

            50% {
                top: 40%;
            }

            100% {
                top: 100%;
            }
        }

        @keyframes moveUp {
            0% {
                background: #333;
                top: 100%;
            }

            50% {
                top: 40%;
            }

            100% {
                top: 50%;
                background: #333;
            }
        }

        @keyframes materia {
            0% {
                background: #fff;
            }

            50% {
                border-radius: 4px;
                background: #fff;
            }

            100% {
                width: 440px;
                height: 280px;
                background: #FFFFFF;
                border-radius: 4px;
            }
        }
    </style>
</head>

<body>


    <aside class="profile-card">

        <form class="login-form  " action="login.php" method="post" style="text-align: center;">
            <p style="color:#333">
                Nós enviamos um Email para <b><?php echo $_GET['email'] ?></b> ajudando a recuperar a sua senha
            </p>
            <p>Por favor, entre no email informado, clique no link enviado e siga o passo a passo para alteração da senha</p>
        </form>
    </aside>
</body>

</html>