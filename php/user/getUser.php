<?php
function getUserNickname($conn, $user_id){
  $sql = "select * from user where user_id = '$user_id'";
  $result = mysqli_query($conn, $sql);
  if($result = $conn->query($sql)){
    $row = $result->fetch_object();
    if($row != null)
      $user_nickname = $row -> user_nickname;
  }
  return $user_nickname;
}

?>
