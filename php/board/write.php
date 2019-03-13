<?php
include("../db/db.php");
include("../user/getUser.php");

$conn = dbconn();
$board_content = $_POST['contents'];
$board_title = $conn->real_escape_string($_POST['title']);
session_start();
$board_user_id = $_SESSION['user_id'];
$board_user_nickname = getUserNickname($conn, $board_user_id);

  $sql = "insert into board(board_no, board_user_id, board_user_nickname, board_title,";
  $sql .=                   "board_content, board_views, board_write_date)";
  $sql .="VALUES(0, '$board_user_id', '$board_user_nickname', '$board_title', '$board_content', 0, now())";
  $conn->set_charset("utf8");
  $result = $conn->query($sql);
  //mysqli_close($conn);
  if($result===false){
    echo "<script>
            alert('글쓰기에 실패하였습니다.');
            history.back();
          </script>";
  }else{
    $board_no = mysqli_insert_id($conn);
    header('Location: readBoard.php?board_no='.$board_no);
    exit;
  }



?>
