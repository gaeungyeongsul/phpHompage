<?php
header("content-type:text/html; charset=UTF-8");
include("boardList_comm.php");
include("db.php");
include("../Model/board.php");

function listd(){
  $conn = dbconn();
  $search = searching($conn);
  $search['skip'] = getSkip($search['page'],$search['numb']);
  getBoardList($search);
}

function page(){
  $conn = dbconn();
  $search = searching($conn);
  $end = getEndPage($search['page'], $search['numb']);
  $last = getLastPage($search);
  if($end > $last){
    $end = $last;
  }else {
    $end = $end;
  }
  $prev = $search['start'] - 1;
  $next = $end + 1;

  if($search['start'] != 1){
    echo '<a href = readBoardListView.php?';
    echo     'page=1&numb='.$search['numb'];
    echo     '&type='.$search['type'].'&keyword='.$search['keyword'].'>&Lang;</a>';
    echo '<a href = readBoardListView.php?';
    echo     'page='.$prev.'&numb='.$search['numb'];
    echo     '&type='.$search['type'].'&keyword='.$search['keyword'].'>&lang;</a>';
  }
  for($i = $search['start']; $i <= $end; $i++){
    if($i == $search['current']){
      echo '<a href=readBoardListView.php?';
      echo     'page='.$i.'&numb='.$search['numb'];
      echo     '&type='.$search['type'].'&keyword='.$search['keyword'].' class="active">'.$i.'</a>';
    }else{
      echo '<a href=readBoardListView.php?';
      echo     'page='.$i.'&numb='.$search['numb'];
      echo     '&type='.$search['type'].'&keyword='.$search['keyword'].'>'.$i.'</a>';
    }
  }
  if($end < $last){
    echo '<a href = readBoardListView.php?';
    echo     'page='.$next.'&numb='.$search['numb'];
    echo     '&type='.$search['type'].'&keyword='.$search['keyword'].'>&rang;</a>';
    echo '<a href = readBoardListView.php?';
    echo     'page='.$last.'&numb='.$search['numb'];
    echo     '&type='.$search['type'].'&keyword='.$search['keyword'].'>&Rang;</a>';
  }
}

function getSkip($page, $numb){
  return floor(($page - 1) * $numb);
}

function getBoardList($search){
  $getBoardSql = "select * from board where 1 = 0";
  if(isset($search['title'])){
    $getBoardSql .= ' or board_title like \'%'.$search['title'].'%\'';
  }
  if(isset($search['content'])){
    $getBoardSql .= ' or board_content like \'%'.$search['content'].'%\'';
  }
  if(isset($search['nickname'])){
    $getBoardSql .= ' or board_user_nickname like \'%'.$search['nickname'].'%\'';
  }
  if($search['type'] == 0){
    $getBoardSql .= ' or 1 = 1';
  }
  $getBoardSql .= ' order by board_no desc limit '.$search['skip'].','.$search['numb'];
  $result = mysqli_query($search['connect'],$getBoardSql);
  $boardlist = array();
  $i = 0;
  while($row = mysqli_fetch_array($result)){
    $i++;
    echo '<tr>';
    echo '	<td>'.$row['board_no'].'</td>';
    echo '	<td><a href=readBoardListView.php?';
    echo          'page='.$search['page'].'&numb='.$search['numb'];
    echo          '&type='.$search['type'].'&keyword='.$search['keyword'].'>';
    echo        $row['board_title'].'</a></td>';
    echo '	<td>'.$row['board_user_nickname'].'</td>';
    echo '	<td>'.$row['board_write_date'].'</td>';
    echo '	<td>'.$row['board_views'].'</td>';
    echo '</tr>';
  }
}

function getEndPage($page, $numb){
  return (floor(($page - 1) / $numb) + 1) * 10;
}

function getLastPage($search){
  $getCountSql = "select count(*) as count from board where 1 = 0";
  if(isset($search['title'])){
    $getCountSql .= ' or board_title like \'%'.$search['title'].'%\'';
  }
  if(isset($search['content'])){
    $getCountSql .= ' or board_content like \'%'.$search['content'].'%\'';
  }
  if(isset($search['nickname'])){
    $getCountSql .= ' or board_user_nickname like \'%'.$search['nickname'].'%\'';
  }
  if($search['type']==0){
    $getCountSql .= ' or 1 = 1';
  }
  $result = mysqli_query($search['connect'],$getCountSql);
  $data = mysqli_fetch_assoc($result);
  $count = $data['count'];
  return ($count - 1 ) / $search['numb'] + 1;
}


?>
