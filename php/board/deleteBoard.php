<?php
  include("../db/db.php");
  $conn = dbconn();
  $board_no = $_POST['board_no'];
  $sql = "delete from board where board_no=$board_no";
  $result = $conn->query($sql);
  $conn->close();
  echo $result;
?>
