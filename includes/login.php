<?php

  if (isset($_POST['login-submit'])) {
    require 'connect.php';

    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    if (empty($email) || empty($password)) {
      header("Location: ../index.php?error=emplyFields");
      exit();
    }
    else {
      $sql = "SELECT * FROM utilizatori WHERE utilizator=? OR email=?;";
      $stmt = mysqli_stmt_init($connect);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlError");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "ss", $email, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
          $pwdCheck = password_verify($password, $row['parola']);
          if ($pwdCheck == false) {
            header("Location: ../index.php?error=wrongPassword");
            exit();
          }
          else if ($pwdCheck == true) {
            session_start();
            $_SESSION['userId'] = $row['idusers'];
            $_SESSION['userUid'] = $row['utilizator'];

            header("Location: ../index.php?login=success");
            exit();
          }
          else {
            header("Location: ../index.php?error=wrongPassword");
            exit();
          }
        }
        else {
          header("Location: ../index.php?error=noUser");
          exit();
        }
      }
    }
  }
  else {
    header("Location: ../index.php");
    exit();
  }

?>
