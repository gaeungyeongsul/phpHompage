<?php
function readBoard($conn){
  //include("db.php");
  //$conn = dbconn();
  if(!empty($_GET['board_no']))
    $board_no = $_GET['board_no'];
  else if(!empty($_POST['board_no']))
    $board_no = $_POST['board_no'];
  $sql = "select * from board where board_no='$board_no'";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)){
    $board['board_no'] = $row['board_no'];
    $board['board_user_id'] = $row['board_user_id'];
    $board['board_user_nickname'] = $row['board_user_nickname'];
    $board['board_title'] = $row['board_title'];
    $board['board_content'] = $row['board_content'];
    $board['board_views'] = $row['board_views'];
    $board['board_write_date'] = $row['board_write_date'];
  }
  return $board;
}
function gotolist(){
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = 1;
  }
  if(isset($_GET['numb'])){
    $numb = $_GET['numb'];
  }else{
    $numb = 10;
  }
  if(isset($_GET['type'])){
    $type = $_GET['type'];
  }else{
    $type = 0;
  }
  if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
  }else{
    $keyword ='';
  }
  return "readBoardListView.php?page=$page&numb=$numb&type=$type&keyword=$keyword";
}

?>
