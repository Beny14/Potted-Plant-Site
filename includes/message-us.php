<?php

  if (isset($_POST['send-message'])) {
    require 'connect.php';

    $full_name = mysqli_real_escape_string($connect, $_POST['full-name']);
    $mailFrom = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);
    $subject = "Shop Plant";

    $mailTo = "example@yahoo.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have recive an e-mail from " . $full_name . "($phone)" . "\n \n" . $message;

    mail($mailTo, $subject, $txt, $headers);

    if (empty($full_name) || empty($mailFrom) || empty($phone) || empty($message)) {
      header("Location: ../contact.php?error=emplyFields&nume=" . $full_name . "&email=" . $mailFrom);
      exit();
    }
    else if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9_ ]*$/", $full_name)) {
      header("Location: ../contact.php?error=invalidEmailName");
      exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9_ ]*$/", $full_name)){
      header("Location: ../contact.php?error=invalidName&nume=" . $mailFrom);
      exit();
    }
    else if (!preg_match("/^[0-9]$/", $phone)) {   // trebuie vazut de ce nu il ia pe 0
      header("Location: ../contact.php?error=checkPhone=" . $phone);
      exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9?$@#()'!,+\-=_:.&€£*%\s]+$/", $message)) {
      header("Location: ../contact.php?error=checkMessage=" . $message);
      exit();
    }
    else {
      $sql = "INSERT INTO message (full_name, email, phone, message) VALUES('$full_name', '$mailFrom', '$phone', '$message');";
      $result = mysqli_query($connect, $sql);
      if($result){
          echo "Records added successfully.";
      }else{
          echo "Records not added successfully." . mysqli_error($connect);
      }
    }
    header("Location: ../index.php?mailsend=succes");
    mysqli_close($connect);
  }



?>
