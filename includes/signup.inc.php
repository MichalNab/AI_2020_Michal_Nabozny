<?php
if(isset($_POST['signup-submit'])){

require 'dbh.inc.php';

$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$passwordrepeat = $_POST['pwd-repeat'];

if(empty($username) ||empty($email)||empty($password)||empty($passwordrepeat)){
header("Location: ../rejestracja.php?error=emptyfields&uid=".$username."&mail=".$email);
 exit();
}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
  header("Location: ../rejestracja.php?error=invalidusernameandmail");
   exit();

}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
  header("Location: ../rejestracja.php?error=invalidmail&uid=".$username);
   exit();

}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
  header("Location: ../rejestracja.php?error=invalidusername&mail=".$email);
   exit();

}
else if ($password !== $passwordrepeat){
  header("Location: ../rejestracja.php?error=passwordcheck&uid=".$username."&mail=".$email);
   exit();

}
else {
  $sql="SELECT nazwaUzytkownika FROM uzytkownicy WHERE nazwaUzytkownika=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
  header("Location: ../rejestracja.php?error=sqlerror");
   exit();
 }
 else{
   mysqli_stmt_bind_param($stmt,"s",$username);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultcheck = mysqli_stmt_num_rows($stmt);
   if($resultcheck>0){
     header("Location: ../rejestracja.php?error=usertaken&mail=".$email);
      exit();
   }
   else{
     $sql="INSERT INTO uzytkownicy (nazwaUzytkownika,emailUzytkownika,hasloUzytkownika) VALUES (?,?,?)";
     $stmt=mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
     header("Location: ../rejestracja.php?error=sqlerror");
      exit();
   }
   else{
     $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedpwd);
     mysqli_stmt_execute($stmt);
     header("Location: ../rejestracja.php?error=noerrors");
      exit();
   }
 }
}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
  header("Location: ../rejestracja.php");
   exit();
}
