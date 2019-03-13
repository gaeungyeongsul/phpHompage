<?php
  include("../db/db.php");
  $conn = dbconn();
  if (isset($_POST['user_id']) && isset($_POST['user_password'])) {
    $user_id = $conn->real_escape_string($_POST['user_id']);
    $user_password =$conn->real_escape_string($_POST['user_password']);

    if(!$conn){
      echo "연결이 실패하였습니다. ".mysqli_error();
    }else{
      $sql = "select user_password from user where user_id='$user_id'";
      $result = $conn->query($sql);
      if ($result) {
        $row = $result->fetch_object();
        if($row != null){
          $get_password = $row->user_password;
          if (password_verify($user_password, $get_password)) {
            session_start();
            $_SESSION['user_id'] = $user_id;
            echo true;
          } else {
            echo false;
          }
        }else{
          echo false;
        }
      }else{
        echo false;
      }
      $result->free();
    }
    $conn->close();
  }
?>
