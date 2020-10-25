<?php

  if (isset($_POST['signup-submit'])) {

    require 'connect.php';

    $nume = mysqli_real_escape_string($connect, $_POST['nume']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $passwordRep = mysqli_real_escape_string($connect, $_POST['password-rep']);

    if (empty($nume) || empty($email) || empty($password) || empty($passwordRep)) {
      header("Location: ../account.php?error=emplyFields&nume=" . $nume . "&email=" . $email);
      exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $nume)) {
      header("Location: ../account.php?error=invalidEmailName");
      exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: ../account.php?error=invalidEmail&nume=" . $nume);
      exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $nume)){
      header("Location: ../account.php?error=invalidName&nume=" . $email);
      exit();
    }
    else if ($password !== $passwordRep) {
      header("Location: ../account.php?error=passwordCheck&nume=" . $nume . "&email=" . $email);
      exit();
    }
    else {
      $sql = "SELECT utilizator FROM utilizatori WHERE utilizator=?";
      $stmt = mysqli_stmt_init($connect);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../account.php?error=sqlError");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $nume);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
          header("Location: ../account.php?error=userTaken&email=" . $email);
          exit();
        }
        else {
          $sql = "INSERT INTO utilizatori(utilizator, email, parola) VALUES(?, ?, ?)";
          $stmt = mysqli_stmt_init($connect);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../account.php?error=sqlError");
            exit();
          }
          else {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss", $nume, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../account.php?signup=success");
            exit();
          }
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
  }
  else {
    header("Location: ../account.php");
    exit();
  }
?>
