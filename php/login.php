<?php
  include("db.php");
  $conn = dbconn();
  if (isset($_POST['user_id']) && isset($_POST['user_password'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);

    if(!$conn){
      echo "연결이 실패하였습니다. ".mysqli_error();
    }else{
      $sql = "select * from user where user_id='$user_id' && user_password='$user_password'";
      //mysqli_query("set names utf8", $conn);
      $result = $conn->query($sql);
      if ($result) {
        $row = $result->fetch_object();
        if($row == null)
          echo false;
        else{
          session_start();
          $_SESSION['user_id'] = $user_id;
          echo true;
        }
        // 메모리 정리
        $result->free();
      }
      $conn->close();
    }
  }
?>
