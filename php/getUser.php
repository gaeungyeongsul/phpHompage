<?php
function getUserNickname($conn, $user_id){
  $sql = "select * from user where user_id = '$user_id'";
    $result = $conn->query($sql);
    if ($result) {
      $row = $result->fetch_object();
      if($row != null)
        $user_nickname = $row -> user_nickname;
      $result->free();
    }
    return $user_nickname;
}

?>
