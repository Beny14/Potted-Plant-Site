<?php
  include('includes/connect.php');

  $sql = 'SELECT * FROM plante ORDER BY create_at';
  $result = mysqli_query($connect, $sql);
  $plante = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);

  $sql = 'SELECT * FROM shopplante ORDER BY create_at';
  $result = mysqli_query($connect, $sql);
  $shopplante = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);
  mysqli_close($connect);

?>
