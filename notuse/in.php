<?php
  include("db.php");
  $conn = dbconn();
  $sql = "insert into user(user_no, user_id, user_password, user_nickname , user_gender,user_join_date)
          VALUES(0, '1234', '1234', '1234', 0, now())";
  $result = mysqli_query($conn,$sql);

?>
