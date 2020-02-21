<?php
require_once('../_config.php');

  require_once('_utilities/_connect.php'); 
  $conn = connect();

  $sql =  "INSERT INTO books (
    title,
    genre,
    author
  ) VALUES (
    '{$_POST['title']}',
    '{$_POST['genre']}',
    '{$_POST['author']}'
  )";

$res = mysqli_query($conn, $sql);
if ($res) {
  // We were successful
  echo "The new book was created successfully.";
} else {
  // We failed
  echo "There was an error creating the record: " . mysqli_error($conn);
}
  /*
    OBJECTIVE:
      1: Connect to the database and insert the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the insert was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */

?>