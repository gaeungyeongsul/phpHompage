<?php
  include("db.php");
  $conn = dbconn();
  if (isset($_GET['user_id'])) {
    // no data passed by get
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql = "select * from user where user_id='$user_id'";
  }else if(isset($_GET['user_nickname'])){
    $user_nickname = mysqli_real_escape_string($conn, $_GET['user_nickname']);
    $sql = "select * from user where user_nickname='$user_nickname'";
  }
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_object();
        if($row == null)
          echo false;
        else
          echo true;
        // 메모리 정리
        $result->free();
    }
    $conn->close();
?>
