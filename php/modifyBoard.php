<?php
include("db.php");
include("getUser.php");

$conn = dbconn();
$board_no = $_POST['board_no'];
$board_content = $_POST['contents'];
$board_title = mysqli_real_escape_string($conn, $_POST['title']);
$board_user_id = mysqli_real_escape_string($conn, $_POST['board_user_id']);
session_start();
if($_SESSION['user_id'] == $board_user_id){
  $sql = "update board set board_title='$board_title', board_content='$board_content'";
  $sql .= " where board_no=$board_no";
  $conn->set_charset("utf8");

  $result = mysqli_query($conn,$sql);
  mysqli_close($conn);
  if($result===false){
    echo "<script>
            alert('글수정에 실패하였습니다.');
            history.go(-2);
          </script>";
  }else{
    header('Location: readBoardListView.php');
    exit;
  }
}

?>
