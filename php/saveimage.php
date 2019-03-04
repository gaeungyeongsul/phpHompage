<?php
if($_FILES['file']['name']){
  if(!$_FILES['file']['error']){
    $name = md5(rand(100,200));
    $ext = explode('.',$_FILES['file']['name']);
    $filename=$name.'.'.$ext[1];
    $destination = '../img/'.$filename;
    $location = $_FILES['file']['tmp_name'];
    move_uploaded_file($location, $destination);
    echo "../img/".$filename;
  }else{
    echo "오마이갓".$_FILES['file']['error'];
  }
}
 ?>
