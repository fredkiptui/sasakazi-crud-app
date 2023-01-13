<?php

include("db.php");

if(isset($_GET['id'])) {
    if (isset($_GET['id']) == true){
        echo 'You are about to delete the Post';
    }
  $id = $_GET['id'];
  $query = "DELETE FROM post WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Post Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../index.php');
}

?>
