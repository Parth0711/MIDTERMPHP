<?php

 require_once('../_config.php');

  // Our database connection
  include('_utilities/_connect.php');
  $conn = connect();

  // deleting our row in the books table
  $sql = "DELETE FROM books WHERE id = {$_GET['id']}";
  $res = mysqli_query($conn, $sql);

  session_start();

  if ($res) {
    // We were successful
    $_SESSION['notification'] = "The new books was deleted successfully.";
  } else {
    // We failed
    $_SESSION['notification'] = "There was an error deleting the books: " . mysqli_error($conn) . "<br>SQL: {$sql}";
  }

  header("Location: ".BASE_PATH."/notification.php");
  exit;

?>