<?php
function searching($conn){
  header("content-type:text/html; charset=UTF-8");

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
    $type = mysqli_real_escape_string($conn,  $_GET['type']);
  }else{
    $type = 0;
  }
  if(isset($_GET['keyword'])){
    $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
  }else{
    $keyword ='';
  }

  if(is_numeric($numb) && is_numeric($page)){
    $search = array(
      "keyword"=> $keyword,
      "type" => $type,
      "page" => $page,
      "current" => $page,
      "start" => getStartPage($page, $numb),
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
    return $search;
  }
}

function getStartPage($page, $numb){
  return floor(($page - 1) / $numb) * $numb + 1;
}

?>
