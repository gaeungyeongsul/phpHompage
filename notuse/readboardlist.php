<?php
header("content-type:text/html; charset=UTF-8");
include("db.php");
$conn = dbconn();

if(isset($_GET['page'])){
  $page = mysqli_real_escape_string($conn, $_GET['page']);
}else{
  $page = 1;
}
if(isset($_GET['numb'])){
  $numb = mysqli_real_escape_string($conn, $_GET['numb']);
}else{
  $numb = 10;
}
if(isset($_GET['type'])){
  $type = mysqli_real_escape_string($conn, $_GET['type']);
}else{
  $type = 0;
}
if(isset($_GET['keyword'])){
// $keyword = $_GET['keyword'];
 $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
}else{
  $keyword ='';
}

if(is_numeric($numb) && is_numeric($page)){
  $search = array(
    "current" => $page,
    "start" => getStartPage($page, $numb),
    "skip" => getSkip($page, $numb),
    "connect" => $conn,
    "numb" => $numb
  );
  if($type == 1) {
    $search['title'] = $keyword;
	}else if($type == 2) {
    $search['content'] = $keyword;
	}else if($type == 3) {
    $search['title'] = $keyword;
    $search['content'] = $keyword;
  }else if($type == 4){
    $search['nickname'] = $keyword;
  }
  $end = getEndPage($page, $numb);
  $last = getLastPage($search);
  if($end > $last){
    $search['end'] = $last;
  }else {
    $search['end'] = $end;
  }
  getBoardList($search);
}
function getStartPage($page, $numb){
  return ($page - 1) / $numb * $numb + 1;
}

function getEndPage($page, $numb){
  return (($page - 1) / $numb + 1) * 10;
}

function getLastPage($search){

  $getCountSql = "select count(*) as count from board where 1 = 1";
  if(isset($search['title'])){
    $getCountSql .= ' and board_title like %\''.$search['title'].'%\'';
  }
  if(isset($search['content'])){
    $getCountSql .= ' and board_content like \'%'.$search['content'].'%\'';
  }
  if(isset($search['nickname'])){
    $getCountSql .= ' and board_user_nickname like \'%'.$search['nickname'].'%\'';
  }
  $result = mysqli_query($search['connect'],$getCountSql);
  $data = mysqli_fetch_assoc($result);
  $count = $data['count'];
  return ($count - 1 ) / $search['numb'] + 1;
}

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

//  $row = mysqli_query($search['connect'],$getBoardSql);
  $result = mysqli_query($search['connect'],$getBoardSql);
  $arr = arry();
  while($row = mysqli_fetch_array($result)){
    //echo $row['board_no'].'<br>';
    //echo $row['board_title'].'<br>';
    //echo $row['board_content'].'<br>';
    //echo $row['board_user_nickname'].'<br>';
    //$obj =
    //$arr['boardname'] =
  }
}

?>
