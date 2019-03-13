<?php
  header("content-type:text/html; charset=UTF-8");
  include("../db/db.php");
  $conn = dbconn();

  $user_id = $conn->real_escape_string($_POST['user_id']);
  $user_password = $conn->real_escape_string($_POST['user_password']);
  $user_password2 = $conn->real_escape_string($_POST['user_password2']);
  $user_nickname = $conn->real_escape_string($_POST['user_nickname']);
  $user_gender = $conn->real_escape_string($_POST['user_gender']);//0 false

  if($user_password == $user_password2){
    $pass = password_hash($user_password, PASSWORD_BCRYPT, ['cost'=>12]);
      $sql = "insert into user(user_no, user_id, user_password, user_nickname , user_gender, user_level, user_join_date)VALUES(0, '$user_id', '$pass', '$user_nickname', $user_gender, 1, now())";
      $conn->set_charset("utf8");
      $result = $conn->query($sql);
      if($result===false){
        echo "<script>
          alert('회원가입에 실패하였습니다.');
          </script>";
      }else{
        header('Location: ../main/main.php');
        exit;
      }
  }else{
    echo "<script>
    alert('회원가입에 실패하였습니다.');
    history.back();
    </script>";
  }
?>
