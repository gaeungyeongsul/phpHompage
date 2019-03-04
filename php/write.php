<?php
include("db.php");
include("getUser.php");

$conn = dbconn();
$board_content = $_POST['contents'];
$board_title = mysqli_real_escape_string($conn, $_POST['title']);
session_start();
$board_user_id = $_SESSION['user_id'];
$board_user_nickname = getUserNickname($conn, $board_user_id);

if(!$conn){
  echo "연결이 실패하였습니다. ".mysqli_error();
}else{
  $sql = "insert into board(board_no, board_user_id, board_user_nickname, board_title,";
  $sql .=                   "board_content, board_views, board_write_date)";
  $sql .="VALUES(0, '$board_user_id', '$board_user_nickname', '$board_title', '$board_content', 0, now())";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn,$sql);
  mysqli_close($conn);
  if($result===false){
    echo "<script>
            alert('글쓰기에 실패하였습니다.');
            history.back();
          </script>";
  }else{
    header('Location: readBoardListView.php');
    exit;
  }

}


?>
