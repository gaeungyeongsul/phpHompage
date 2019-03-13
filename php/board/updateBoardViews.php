<?php
function updateBoardViews($conn){
  if(!empty($_GET['board_no']))
    $board_no = $_GET['board_no'];
  else if(!empty($_POST['board_no']))
    $board_no = $_POST['board_no'];
  $sql = "update board set board_views = board_views + 1";
  $sql .= " where board_no=$board_no";
  $conn->set_charset("utf8");

  $result =$conn->query($sql);
}
?>
