<?php
header("content-type:text/html; charset=UTF-8");
include("search.php");
$search = b();
$end = getEndPage($search['page'], $search['numb']);
$last = getLastPage($search);
$start = $search['start'];
if($end > $last){
  $search['end'] = $last;
  $end = $last;
}else {
  $search['end'] = $end;
  $end = $end;
}
for($i = $start; $i <= $end; $i++){
  echo $i;
}
echo $last."라스트";

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
?>
