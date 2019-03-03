<?php
header("content-type:text/html; charset=UTF-8");
include("boardList_comm.php");
$search = a();
$search['skip'] = getSkip($search['page'],$search['numb']);
getBoardList($search);

function getSkip($page, $numb){
  return ($page - 1) * $numb;
}

function getBoardList($search){
  $getBoardSql = "select * from board where 1 = 1";
  if(isset($search['title'])){
    $getBoardSql .= ' and board_title like \'%'.$search['title'].'%\'';
  }
  if(isset($search['content'])){
    $getBoardSql .= ' and board_content like \'%'.$search['content'].'%\'';
  }
  if(isset($search['nickname'])){
    $getBoardSql .= ' and board_user_nickname like \'%'.$search['nickname'].'%\'';
  }
  $getBoardSql .= ' order by board_no desc limit '.$search['skip'].','.$search['numb'];
  $result = mysqli_query($search['connect'],$getBoardSql);
  while($row = mysqli_fetch_array($result)){
    echo $row['board_no'].'<br>';
    echo $row['board_title'].'<br>';
    echo $row['board_content'].'<br>';
    echo $row['board_user_nickname'].'<br>';
  //  $obj =
    //$arr['boardname'] =
  }
}

?>
