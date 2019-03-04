<?php
  header("content-type:text/html; charset=UTF-8");
  include("db.php");
  $conn = dbconn();

  $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
  $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
  $user_password2 = mysqli_real_escape_string($conn, $_POST['user_password2']);
  $user_nickname = mysqli_real_escape_string($conn, $_POST['user_nickname']);
  $user_gender = mysqli_real_escape_string($conn, $_POST['user_gender']);//0 false

  if(!$conn){
    echo "연결이 실패하였습니다. ".mysqli_error();
  }else{
    $sql = "insert into user(user_no, user_id, user_password, user_nickname , user_gender, user_level, user_join_date)
            VALUES(0, '$user_id', '$user_password', '$user_nickname', $user_gender, 1, now())";
    $conn->set_charset("utf8");
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    if($result===false){
      echo "<script>
              alert('회원가입에 실패하였습니다.');
              history.back();
            </script>";
    }else{
      header('Location: main.php');
      exit;
    }
  }
?>
