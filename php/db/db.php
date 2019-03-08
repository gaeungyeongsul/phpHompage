<?php
function dbconn()
{
  $host_name="127.0.0.1:3307";
  $db_user_id="root";
  $db_name="gaeundev";
  $db_pw="mysql1";
  $conn = mysqli_connect($host_name,$db_user_id,$db_pw, $db_name);//mysql연결
  
  if(!$conn)die("연결에 실패하였습니다.".mysqli_error());
    return $conn; //호출한 페이지 종료 후 호출한 페이지로 넘어감
}

?>
