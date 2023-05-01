
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
    
    
$mail = new PHPMailer();




session_start();

$errors = [];
$user_id = "";
$db = mysqli_connect('Localhost', 'orvalh39_perfume', 'Atecco@123', 'orvalh39_perfume');

 

// LOG USER IN
if (isset($_POST['login_user'])) {
  $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // validate form
  if (empty($user_id)) array_push($errors, "Campo Email é obrigatório");
  if (empty($password)) array_push($errors, "Campo Senha é obrigatório");

  // if no error in form, log user in
  if (count($errors) == 0) {
    $password = md5($password);
    $sql = "SELECT * FROM user WHERE username='$user_id' OR email='$user_id' AND password='$password'";
    $results = mysqli_query($db, $sql);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $user_id;
      $_SESSION['success'] = "Você entrou";
      header('location: index.php');
    }else {
      array_push($errors, "Dados incorretos");
    }
  }
}

/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM user WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Campo Email é obrigatório");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Nenhum usuário registrado nesse email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);



    $mail = new PHPMailer();
    $mail->isSMTP();
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = "tsl";
    $mail->SMTPAuth = true;
    $mail->Username = 'orvalhosj@gmail.com';
    $mail->Password = 'vtntjvgexpjmcgou';
    $mail->setFrom('orvalhosj@gmail.com', 'Orvalho Sj');
    $mail->addAddress($email, 'John Doe');
    $mail->Body = "Olá, Clique nesse link <a href=\"http://orvalhosj.com/new_pass.php?token=" . $token . "\">link</a> para redefinir sua senha";
    $mail->Subject = 'Redefinir Senha Orvalho';
    $mail->msgHTML("Olá, clique nesse link para  <a href=\"http://orvalhosj.com/new_pass.php?token=" . $token . "\">link</a> redefinir sua senha");
    $mail->AltBody = "Olá, clique nesse link para  <a href=\"http://orvalhosj.com/new_pass.php?token=" . $token . "\">link</a> redefinir sua senha";

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $_SESSION['token'] = $token;
        header('location: pending.php?email=' . $email);
    }
    
  }


}



  
if (isset($_POST['new_password'])) {
    $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
    $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);
  
    // Grab to token that came from the email link
    $token = $_SESSION['token'];
    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Senha Obrigatória");
    if ($new_pass !== $new_pass_c) array_push($errors, "As senhas não são iguais");
    if (count($errors) == 0) {
      // select email address of user from the password_reset table 
      array_push($errors, $token);
      $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
      $results = mysqli_query($db, $sql);
      $email = mysqli_fetch_assoc($results)['email'];

      
  
      if ($email) {
          
        $new_pass = $new_pass;
        $sql = "UPDATE user SET password='$new_pass' WHERE email='$email'";
        $results = mysqli_query($db, $sql);
        header('location: login.php?redefinido=1');
        
      }
    }
  
}
