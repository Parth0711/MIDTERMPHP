<?php

  require_once('../_config.php');
  require_once('_utilities/_connect.php'); 
  $conn = connect();
    /*
    OBJECTIVE:
      1: Connect to the database and update the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the update was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */
  $sql="UPDATE books SET
    title = '{$_POST['title']}',
    genre = '{$_POST['genre']}',
    author = '{$_POST['author']}'
    WHERE id = {$_POST['id']}";
        
    $res = mysqli_query($conn, $sql);
    
        session_start();

        if($res){
          echo "The book was updated successfully.";
      }
      else{
          echo "There was an error updating the record:" .mysqli_error($conn);
      }
        

?>