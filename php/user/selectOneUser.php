<?php
  include("../db/db.php");
  $conn = dbconn();
  if (isset($_GET['user_id'])) {
    $user_id = $conn->real_escape_string($_GET['user_id']);
    $sql = "select * from user where user_id='$user_id'";
  }else if(isset($_GET['user_nickname'])){
    $user_nickname = $conn->real_escape_string($_GET['user_nickname']);
    $sql = "select * from user where user_nickname='$user_nickname'";
  }
  $result = $conn->query($sql);
  if ($result) {
    $row = $result->fetch_object();
      if($row == null)
        echo false;
      else
        echo true;
  }
?>
