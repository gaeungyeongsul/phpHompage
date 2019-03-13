<?php
function searching($conn){
  if(isset($_GET['page'])){
    $page = $conn->real_escape_string($_GET['page']);
  }else{
    $page = 1;
  }
  if(isset($_GET['numb'])){
    $numb = $conn->real_escape_string($_GET['numb']);
  }else{
    $numb = 10;
  }
  if(isset($_GET['type'])){
    $type = $conn->real_escape_string($_GET['type']);
  }else{
    $type = 0;
  }
  if(isset($_GET['keyword'])){
    $keyword = $conn->real_escape_string($_GET['keyword']);
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
